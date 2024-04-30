<?php if (!isset($error)) { ?>
<script>!function(e,o,t){e[t]=function(n,r){var c={sandbox:"https://sandbox-merchant.revolut.com/embed.js",prod:"https://merchant.revolut.com/embed.js",dev:"https://merchant.revolut.codes/embed.js"},d=o.createElement("script");d.id="revolut-checkout",d.src=c[r]||c.prod,d.async=!0,o.head.appendChild(d);var s={then:function(r,c){d.onload=function(){r(e[t](n))},d.onerror=function(){o.head.removeChild(d),c&&c(new Error(t+" is failed to load"))}}};return"function"==typeof Promise?Promise.resolve(s):s}}(window,document,"RevolutCheckout");</script>
<?php if ($testmode) { ?>
<div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> <?php echo $text_testmode; ?></div>
<?php } ?>
<?php if (!$payment_view) { ?>
<h4><?php echo $text_card_details; ?></h4>
<div class="well" style="background-color:<?php echo $background_colour; ?>;">
  <div id="revolut-card-field" style="background-color:<?php echo $background_colour; ?>;"></div>
  <?php echo $svg_logo; ?>
  <div id="revolut-card-error" class="text-danger text-center"></div>
</div>
<?php } ?>
<div class="text-center">
  <button type="button" id="button-confirm" class="btn btn-primary"><?php echo $button_confirm; ?></button>
  <?php if ($payment_view) { ?>
  <br />
  <?php echo $svg_logo; ?>
  <?php } ?>
</div>
<script type="text/javascript">
const RC = RevolutCheckout('<?php echo $public_id; ?>', '<?php echo $mode; ?>');

<?php if ($payment_view) { ?>
$('#button-confirm').on('click', function() {
    $('#button-confirm').button('loading');

    RC.then(function (instance) {
        var popup = instance.payWithPopup({
            name: '<?php echo $name; ?>',
            email: '<?php echo $email; ?>',
            phone: '<?php echo $phone; ?>',
            billingAddress: {
                countryCode: '<?php echo $countryCode; ?>',
                region: '<?php echo $region; ?>',
                city: '<?php echo $city; ?>',
                streetLine1: '<?php echo $streetLine1; ?>',
                streetLine2: '<?php echo $streetLine2; ?>',
                postcode: '<?php echo $postcode; ?>'
            },
            onSuccess() {
                completeOrder();
            },
            onError(message) {
                alert(message);
                popup.destroy();
                $('#button-confirm').button('reset');
            },
            onCancel() {
                popup.destroy();
                $('#button-confirm').button('reset');
            }
        });
    });
});
<?php } else { ?>
RC.then(function (instance) {
    var card = instance.createCardField({
        hidePostcodeField: true,
        target: document.getElementById('revolut-card-field'),
        styles: {
            default: {
                color: '<?php echo $font_colour; ?>',
                "::placeholder": {
                    color: '<?php echo $font_colour; ?>',
                }
            },
        },
        onSuccess() {
            completeOrder();
        },
        onValidation(errors) {
            if (errors.length) {
                $('#button-confirm').button('reset');
                $('#revolut-card-error').html("");
                $('#revolut-card-error').append(errors[0].message);
            } else {
                $('#revolut-card-error').html("");
            }
        },
        onError(message) {
            alert(message);
            $('#button-confirm').button('reset');
        },
        onCancel() {
            $('#button-confirm').button('reset');
        }
    });

    $('#button-confirm').on('click', function() {
        $('#button-confirm').button('loading');

        card.submit({
            name: '<?php echo $name; ?>',
            email: '<?php echo $email; ?>',
            phone: '<?php echo $phone; ?>',
            billingAddress: {
                countryCode: '<?php echo $countryCode; ?>',
                region: '<?php echo $region; ?>',
                city: '<?php echo $city; ?>',
                streetLine1: '<?php echo $streetLine1; ?>',
                streetLine2: '<?php echo $streetLine2; ?>',
                postcode: '<?php echo $postcode; ?>'
            }
        });
    });
});
<?php } ?>

function completeOrder() {
    $.ajax({
        url : 'index.php?route=extension/payment/revolut/completeOrder',
        type: 'post',
        data: {'revolut_id': '<?php echo $revolut_id; ?>'},
        dataType: 'json',
        success: function(json) {
            if (json && json['success']) {
                <?php if ($payment_view) { ?>
                setTimeout(function() {
                    location = json['redirect'];
                }, 1500);
                <?php } else { ?>
                location = json['redirect'];
                <?php } ?>
            } else if (json && json['error']) {
                alert(json['error']);
                $('#button-confirm').button('reset');
            } else {
                alert('<?php echo $error_unknown_ajax; ?>');
                $('#button-confirm').button('reset');
            }
        }
    });
}
</script>
<?php } else { ?>
<div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> <?php echo $error; ?></div>
<?php } ?>