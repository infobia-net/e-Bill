<h2><?php echo $text_payment_info; ?></h2>
<table class="table table-striped table-bordered">
  <tr>
    <td><?php echo $text_reference; ?></td>
    <td><?php echo $revolut_order['order_id']; ?></td>
  </tr>
  <tr>
    <td><?php echo $text_id; ?></td>
    <td><?php echo $revolut_order['revolut_id']; ?></td>
  <tr>
    <td><?php echo $text_order_total; ?></td>
    <td><?php echo $revolut_order['total']; ?></td>
  </tr>
  <tr>
    <td><?php echo $text_refund; ?></td>
    <td>
      <input type="text" id="refund-amount" name="refund_amount" placeholder="<?php echo $text_refund_amount; ?>" class="form-control" />
      <br />
      <button class="button btn btn-primary" id="button-refund"><?php echo $button_refund; ?></button> 
    </td>
  </tr>
  <tr>
    <td><?php echo $text_transactions; ?></td>
    <td><table class="table table-striped table-bordered" id="revolut_transactions">
        <thead>
          <tr>
            <td class="text-left"><strong><?php echo $column_date_added; ?></strong></td>
            <td class="text-left"><strong><?php echo $column_state; ?></strong></td>
            <td class="text-left"><strong><?php echo $column_amount; ?></strong></td>
          </tr>
        </thead>
        <tbody>
          <?php foreach($revolut_order['transactions'] as $transaction) { ?>
          <tr>
            <td class="text-left"><?php echo $transaction['date_added']; ?></td>
            <td class="text-left"><?php echo $transaction['state']; ?></td>
            <td class="text-left"><?php echo $transaction['amount']; ?></td>
          </tr>
          <?php } ?>
        </tbody>
      </table></td>
  </tr>
</table>
<script type="text/javascript">
$('#button-refund').on('click', function () {
    if (confirm('<?php echo $text_confirm_refund; ?>')) {
        if (!$('#refund-amount').val()) {
            alert('Please enter a valid refund amount!');
        } else {
            $.ajax({
                url: 'index.php?route=extension/payment/revolut/refund&order_id=<?php echo $order_id; ?>&token=<?php echo $token; ?>',
                type: 'post',
                data: $('#refund-amount'),
                dataType: 'json',
                cache: false,
                beforeSend: function() {
                    $('#button-refund').button('loading');
                    $('#button-refund').prop('disabled', true);
                },
                complete: function() {
                    $('#button-refund').button('reset');
                    $('#button-refund').prop('disabled', false);
                },
                success: function(json) {
                    if (json['success']) {
                        alert(json['success']);
                        location.reload();
                    } else if (json['error']) {
                        alert(json['error']);
                    }
                }
            });
        }
    }
});
</script>