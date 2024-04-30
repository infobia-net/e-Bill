<?php echo $header; ?><?php echo $column_left; ?>
<div id="content">
  <div class="page-header">
    <div class="container-fluid">
      <div class="pull-right">
        <button type="submit" form="form-revolut" data-toggle="tooltip" title="<?php echo $button_save; ?>" class="btn btn-primary"><i class="fa fa-save"></i></button>
        <a href="<?php echo $cancel; ?>" data-toggle="tooltip" title="<?php echo $button_cancel; ?>" class="btn btn-default"><i class="fa fa-reply"></i></a></div>
      <h1><?php echo $heading_title; ?></h1>
      <ul class="breadcrumb">
        <?php foreach ($breadcrumbs as $breadcrumb) { ?>
        <li><a href="<?php echo $breadcrumb['href']; ?>"><?php echo $breadcrumb['text']; ?></a></li>
        <?php } ?>
      </ul>
    </div>
  </div>
  <div class="container-fluid">
    <div class="alert alert-info"><?php echo $text_welcome; ?></div>
    <?php if (!empty($error_webhook_not_setup)) { ?>
    <div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> <?php echo $error_webhook_not_setup; ?></div>
    <?php } ?>
    <?php if (!empty($error_order_statuses)) { ?>
    <div class="alert alert-warning"><i class="fa fa-exclamation-circle"></i> <?php echo $error_order_statuses; ?></div>
    <?php } ?>
    <?php if (!empty($success)) { ?>
    <div class="alert alert-success"><i class="fa fa-exclamation-circle"></i> <?php echo $success; ?>
      <button type="button" class="close" data-dismiss="alert">&times;</button>
    </div>
    <?php } ?>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title"><i class="fa fa-pencil"></i> <?php echo $text_edit; ?></h3>
      </div>
      <div class="panel-body">
        <form action="<?php echo $action; ?>" method="post" enctype="multipart/form-data" id="form-revolut" class="form-horizontal">
          <ul class="nav nav-tabs">
            <li class="active"><a href="#tab-general" data-toggle="tab"><?php echo $tab_general; ?></a></li>
            <li><a href="#tab-style" data-toggle="tab"><?php echo $tab_widget_style; ?></a></li>
            <li><a href="#tab-status" data-toggle="tab"><?php echo $tab_order_status; ?></a></li>
          </ul>
          <div class="tab-content">
            <div class="tab-pane active" id="tab-general">
              <div class="form-group required">
                <label class="col-sm-2 control-label" for="entry-email"><?php echo $entry_api_key; ?></label>
                <div class="col-sm-10">
                  <input type="text" name="revolut_api_key" value="<?php echo $revolut_api_key; ?>" placeholder="<?php echo $entry_api_key; ?>" id="entry-api-key" class="form-control" />
                  <?php if ($error_api_key) { ?>
                  <div class="text-danger"><?php echo $error_api_key; ?></div>
                  <?php } ?>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label" for="input-live-test"><span data-toggle="tooltip" title="<?php echo $help_test; ?>"><?php echo $entry_test; ?></span></label>
                <div class="col-sm-10">
                  <select name="revolut_test" id="input-live-test" class="form-control">
                    <?php if ($revolut_test) { ?>
                    <option value="1" selected="selected"><?php echo $text_yes; ?></option>
                    <option value="0"><?php echo $text_no; ?></option>
                    <?php } else { ?>
                    <option value="1"><?php echo $text_yes; ?></option>
                    <option value="0" selected="selected"><?php echo $text_no; ?></option>
                    <?php } ?>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label" for="input-payment-title"><span data-toggle="tooltip" title="<?php echo $help_payment_title; ?>"><?php echo $entry_payment_title; ?></span></label>
                <div class="col-sm-10">
                  <input type="text" name="revolut_payment_title" value="<?php echo $revolut_payment_title; ?>" placeholder="<?php echo $entry_payment_title; ?>" id="entry-payment-title" class="form-control" />
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label" for="input-capture-mode"><span data-toggle="tooltip" title="<?php echo $help_capture_mode; ?>"><?php echo $entry_capture_mode; ?></span></label>
                <div class="col-sm-10">
                  <select name="revolut_capture_mode" id="input-capture-mode" class="form-control">
                    <?php if ($revolut_capture_mode == 'AUTOMATIC') { ?>
                    <option value="AUTOMATIC" selected="selected"><?php echo $text_automatic; ?></option>
                    <?php } else { ?>
                    <option value="AUTOMATIC"><?php echo $text_automatic; ?></option>
                    <?php } ?>
                    <?php if ($revolut_capture_mode == 'MANUAL') { ?>
                    <option value="MANUAL" selected="selected"><?php echo $text_manual; ?></option>
                    <?php } else { ?>
                    <option value="MANUAL"><?php echo $text_manual; ?></option>
                    <?php } ?>
                  </select>
                </div>
              </div>
              <div class="form-group"<?php echo $revolut_capture_mode == 'MANUAL' ? '' : ' style="display:none;"'; ?>>
                <label class="col-sm-2 control-label" for="input-capture-status"><span data-toggle="tooltip" title="<?php echo $help_capture_status; ?>"><?php echo $entry_capture_status; ?></span></label>
                <div class="col-sm-10">
                  <select name="revolut_capture_status_id" id="input-capture-status" class="form-control">
                    <?php foreach ($order_statuses as $order_status) { ?>
                    <?php if ($order_status['order_status_id'] == $revolut_capture_status_id) { ?>
                    <option value="<?php echo $order_status['order_status_id']; ?>" selected="selected"><?php echo $order_status['name']; ?></option>
                    <?php } else { ?>
                    <option value="<?php echo $order_status['order_status_id']; ?>"><?php echo $order_status['name']; ?></option>
                    <?php } ?>
                    <?php } ?>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label" for="input-total"><span data-toggle="tooltip" title="<?php echo $help_total; ?>"><?php echo $entry_total; ?></span></label>
                <div class="col-sm-10">
                  <input type="text" name="revolut_total" value="<?php echo $revolut_total; ?>" placeholder="<?php echo $entry_total; ?>" id="input-total" class="form-control"/>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label" for="input-geo-zone"><?php echo $entry_geo_zone; ?></label>
                <div class="col-sm-10">
                  <select name="revolut_geo_zone_id" id="input-geo-zone" class="form-control">
                    <option value="0"><?php echo $text_all_zones; ?></option>
                    <?php foreach ($geo_zones as $geo_zone) { ?>
                    <?php if ($geo_zone['geo_zone_id'] == $revolut_geo_zone_id) { ?>
                    <option value="<?php echo $geo_zone['geo_zone_id']; ?>" selected="selected"><?php echo $geo_zone['name']; ?></option>
                    <?php } else { ?>
                    <option value="<?php echo $geo_zone['geo_zone_id']; ?>"><?php echo $geo_zone['name']; ?></option>
                    <?php } ?>
                    <?php } ?>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label" for="input-status"><?php echo $entry_status; ?></label>
                <div class="col-sm-10">
                  <select name="revolut_status" id="input-status" class="form-control">
                    <?php if ($revolut_status) { ?>
                    <option value="1" selected="selected"><?php echo $text_enabled; ?></option>
                    <option value="0"><?php echo $text_disabled; ?></option>
                    <?php } else { ?>
                    <option value="1"><?php echo $text_enabled; ?></option>
                    <option value="0" selected="selected"><?php echo $text_disabled; ?></option>
                    <?php } ?>
                  </select>
                </div>
              </div>
              <?php if ($show_webhook_button) { ?>
              <div class="form-group">
                <label class="col-sm-2 control-label" for="button-<?php echo $webhook_id ? 'delete' : 'setup'; ?>-webhook"><span data-toggle="tooltip" title="<?php echo $help_webhook; ?>"><?php echo $entry_webhook; ?></span></label>
                <div class="col-sm-10">
                  <?php if ($webhook_id) { ?>
                  <button type="button" id="button-delete-webhook" onclick="deleteWebhook();" class="btn btn-primary btn-lg"><?php echo $button_delete; ?></button>
                  <?php } else { ?>
                  <button type="button" id="button-setup-webhook" onclick="setupWebhook();" class="btn btn-primary btn-lg"><?php echo $button_setup; ?></button>
                  <?php } ?>
                </div>
              </div>
              <?php } ?>
              <div class="form-group">
                <label class="col-sm-2 control-label" for="input-sort-order"><?php echo $entry_sort_order; ?></label>
                <div class="col-sm-10">
                  <input type="text" name="revolut_sort_order" value="<?php echo $revolut_sort_order; ?>" placeholder="<?php echo $entry_sort_order; ?>" id="input-sort-order" class="form-control"/>
                </div>
              </div>
            </div>
            <div class="tab-pane" id="tab-style">
              <div class="form-group">
                <label class="col-sm-2 control-label" for="input-payment-view"><span data-toggle="tooltip" title="<?php echo $help_payment_view; ?>"><?php echo $entry_payment_view; ?></span></label>
                <div class="col-sm-10">
                  <select name="revolut_payment_view" id="input-payment-view" class="form-control">
                    <?php if ($revolut_payment_view == '0') { ?>
                    <option value="0" selected="selected"><?php echo $text_card_field; ?></option>
                    <?php } else { ?>
                    <option value="0"><?php echo $text_card_field; ?></option>
                    <?php } ?>
                    <?php if ($revolut_payment_view == '1') { ?>
                    <option value="1" selected="selected"><?php echo $text_popup; ?></option>
                    <?php } else { ?>
                    <option value="1"><?php echo $text_popup; ?></option>
                    <?php } ?>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label" for="input-customise"><span data-toggle="tooltip" title="<?php echo $help_customise; ?>"><?php echo $entry_customise; ?></span></label>
                <div class="col-sm-10">
                  <select name="revolut_customise" id="input-customise" class="form-control">
                    <?php if ($revolut_customise == '0') { ?>
                    <option value="0" selected="selected"><?php echo $text_no; ?></option>
                    <?php } else { ?>
                    <option value="0"><?php echo $text_no; ?></option>
                    <?php } ?>
                    <?php if ($revolut_customise == '1') { ?>
                    <option value="1" selected="selected"><?php echo $text_yes; ?></option>
                    <?php } else { ?>
                    <option value="1"><?php echo $text_yes; ?></option>
                    <?php } ?>
                  </select>
                </div>
              </div>
              <div class="form-group"<?php echo $revolut_customise ? '' : ' style="display:none;"'; ?>>
                <label class="col-sm-2 control-label" for="input-background-colour"><span data-toggle="tooltip" title="<?php echo $help_background_colour; ?>"><?php echo $entry_background_colour; ?></span></label>
                <div class="col-sm-10">
                  <div class="input-group">
                    <span class="input-group-addon" id="input-background-colour-swatch">
                      <i style="height:15px; width:15px; display:inline-block; background-color:<?php echo $revolut_background_colour; ?>;"></i>
                    </span>
                    <input type="text" name="revolut_background_colour" id="input-background-colour" value="<?php echo $revolut_background_colour; ?>" class="form-control" />
                  </div>
                </div>
              </div>
              <div class="form-group"<?php echo $revolut_customise ? '' : ' style="display:none;"'; ?>>
                <label class="col-sm-2 control-label" for="input-font-colour"><span data-toggle="tooltip" title="<?php echo $help_font_colour; ?>"><?php echo $entry_font_colour; ?></span></label>
                <div class="col-sm-10">
                  <div class="input-group">
                    <span class="input-group-addon" id="input-font-colour-swatch">
                      <i style="height:15px; width:15px; display:inline-block; background-color:<?php echo $revolut_font_colour; ?>;"></i>
                    </span>
                    <input type="text" name="revolut_font_colour" id="input-font-colour" value="<?php echo $revolut_font_colour; ?>" class="form-control" />
                  </div>
                </div>
              </div>
              <div class="form-group"<?php echo $revolut_customise ? '' : ' style="display:none;"'; ?>>
                <label class="col-sm-2 control-label" for="input-logo-theme"><span data-toggle="tooltip" title="<?php echo $help_logo_theme; ?>"><?php echo $entry_logo_theme; ?></span></label>
                <div class="col-sm-10">
                  <select name="revolut_logo_theme" id="input-logo-theme" class="form-control">
                    <?php if ($revolut_logo_theme == '#7a7a7a') { ?>
                    <option value="#7a7a7a" selected="selected"><?php echo $text_dark; ?></option>
                    <?php } else { ?>
                    <option value="#7a7a7a"><?php echo $text_dark; ?></option>
                    <?php } ?>
                    <?php if ($revolut_logo_theme == '#cccccc') { ?>
                    <option value="#cccccc" selected="selected"><?php echo $text_light; ?></option>
                    <?php } else { ?>
                    <option value="#cccccc"><?php echo $text_light; ?></option>
                    <?php } ?>
                  </select>
                </div>
              </div>
              <div class="form-group"<?php echo $revolut_customise ? '' : ' style="display:none;"'; ?>>
                <label class="col-sm-2 control-label" for="button-reset"><span data-toggle="tooltip" title="<?php echo $help_reset; ?>"><?php echo $entry_reset; ?></span></label>
                <div class="col-sm-10">
                  <button type="button" id="button-reset" onclick="resetCustomisations();" class="btn btn-primary btn-lg"><?php echo $button_reset; ?></button>
                </div>
              </div>
            </div>
            <div class="tab-pane" id="tab-status">
              <div class="form-group">
                <label class="col-sm-2 control-label" for="input-cancelled-status"><?php echo $entry_cancelled_status; ?></label>
                <div class="col-sm-10">
                  <select name="revolut_cancelled_status_id" id="input-cancelled-status" class="form-control">
                    <?php foreach ($order_statuses as $order_status) { ?>
                    <?php if ($order_status['order_status_id'] == $revolut_cancelled_status_id) { ?>
                    <option value="<?php echo $order_status['order_status_id']; ?>" selected="selected"><?php echo $order_status['name']; ?></option>
                    <?php } else { ?>
                    <option value="<?php echo $order_status['order_status_id']; ?>"><?php echo $order_status['name']; ?></option>
                    <?php } ?>
                    <?php } ?>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label" for="input-authorised-status"><?php echo $entry_authorised_status; ?></label>
                <div class="col-sm-10">
                  <select name="revolut_authorised_status_id" id="input-completed-status" class="form-control">
                    <?php foreach ($order_statuses as $order_status) { ?>
                    <?php if ($order_status['order_status_id'] == $revolut_authorised_status_id) { ?>
                    <option value="<?php echo $order_status['order_status_id']; ?>" selected="selected"><?php echo $order_status['name']; ?></option>
                    <?php } else { ?>
                    <option value="<?php echo $order_status['order_status_id']; ?>"><?php echo $order_status['name']; ?></option>
                    <?php } ?>
                    <?php } ?>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label" for="input-completed-status"><?php echo $entry_completed_status; ?></label>
                <div class="col-sm-10">
                  <select name="revolut_completed_status_id" id="input-completed-status" class="form-control">
                    <?php foreach ($order_statuses as $order_status) { ?>
                    <?php if ($order_status['order_status_id'] == $revolut_completed_status_id) { ?>
                    <option value="<?php echo $order_status['order_status_id']; ?>" selected="selected"><?php echo $order_status['name']; ?></option>
                    <?php } else { ?>
                    <option value="<?php echo $order_status['order_status_id']; ?>"><?php echo $order_status['name']; ?></option>
                    <?php } ?>
                    <?php } ?>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label" for="input-processing-status"><?php echo $entry_processing_status; ?></label>
                <div class="col-sm-10">
                  <select name="revolut_processing_status_id" id="input-expired-status" class="form-control">
                    <?php foreach ($order_statuses as $order_status) { ?>
                    <?php if ($order_status['order_status_id'] == $revolut_processing_status_id) { ?>
                    <option value="<?php echo $order_status['order_status_id']; ?>" selected="selected"><?php echo $order_status['name']; ?></option>
                    <?php } else { ?>
                    <option value="<?php echo $order_status['order_status_id']; ?>"><?php echo $order_status['name']; ?></option>
                    <?php } ?>
                    <?php } ?>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label" for="input-failed-status"><?php echo $entry_failed_status; ?></label>
                <div class="col-sm-10">
                  <select name="revolut_failed_status_id" id="input-failed-status" class="form-control">
                    <?php foreach ($order_statuses as $order_status) { ?>
                    <?php if ($order_status['order_status_id'] == $revolut_failed_status_id) { ?>
                    <option value="<?php echo $order_status['order_status_id']; ?>" selected="selected"><?php echo $order_status['name']; ?></option>
                    <?php } else { ?>
                    <option value="<?php echo $order_status['order_status_id']; ?>"><?php echo $order_status['name']; ?></option>
                    <?php } ?>
                    <?php } ?>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label" for="input-pending-status"><?php echo $entry_pending_status; ?></label>
                <div class="col-sm-10">
                  <select name="revolut_pending_status_id" id="input-pending-status" class="form-control">
                    <?php foreach ($order_statuses as $order_status) { ?>
                    <?php if ($order_status['order_status_id'] == $revolut_pending_status_id) { ?>
                    <option value="<?php echo $order_status['order_status_id']; ?>" selected="selected"><?php echo $order_status['name']; ?></option>
                    <?php } else { ?>
                    <option value="<?php echo $order_status['order_status_id']; ?>"><?php echo $order_status['name']; ?></option>
                    <?php } ?>
                    <?php } ?>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label" for="input-refunded-status"><?php echo $entry_refunded_status; ?></label>
                <div class="col-sm-10">
                  <select name="revolut_refunded_status_id" id="input-refunded-status" class="form-control">
                    <?php foreach ($order_statuses as $order_status) { ?>
                    <?php if ($order_status['order_status_id'] == $revolut_refunded_status_id) { ?>
                    <option value="<?php echo $order_status['order_status_id']; ?>" selected="selected"><?php echo $order_status['name']; ?></option>
                    <?php } else { ?>
                    <option value="<?php echo $order_status['order_status_id']; ?>"><?php echo $order_status['name']; ?></option>
                    <?php } ?>
                    <?php } ?>
                  </select>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
var customise_select = $('select[name=\'revolut_customise\']');

customise_select.on('change', function () {
    if (customise_select.val() == 1) {
        $('#input-background-colour').parent().parent().parent().show();
        $('#input-font-colour').parent().parent().parent().show();
        $('#input-logo-theme').parent().parent().show();
        $('#button-reset').parent().parent().show();
    } else {
        $('#input-background-colour').parent().parent().parent().hide();
        $('#input-font-colour').parent().parent().parent().hide();
        $('#input-logo-theme').parent().parent().hide();
        $('#button-reset').parent().parent().hide();
    }
});

var capture_mode_select = $('select[name=\'revolut_capture_mode\']');

capture_mode_select.on('change', function() {
    if (capture_mode_select.val() == 'MANUAL') {
        $('#input-capture-status').parent().parent().show();
    } else {
        $('#input-capture-status').parent().parent().hide();
    }
});

function setupWebhook() {
    $.ajax({
        url: 'index.php?route=extension/payment/revolut/setupWebhook&setup=1&token=<?php echo $token; ?>',
        type: 'GET',
        beforeSend: function() {
            $('#button-setup-webhook').prop('disabled', true);
            $('#button-setup-webhook').button('loading');
        },
        complete: function() {
            $('#button-setup-webhook').prop('disabled', false);
            $('#button-setup-webhook').button('reset');
        },
        success: function(json) {
            if (json['success']) {
                alert(json['success']);
            } else if (json['error']) {
                alert(json['error']);
            }

            location.reload();
        },
        error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
        }
    });
}

function deleteWebhook() {
    $.ajax({
        url: 'index.php?route=extension/payment/revolut/setupWebhook&delete=1&token=<?php echo $token; ?>',
        type: 'GET',
        beforeSend: function() {
            $('#button-delete-webhook').prop('disabled', true);
            $('#button-delete-webhook').button('loading');
        },
        complete: function() {
            $('#button-delete-webhook').prop('disabled', false);
            $('#button-delete-webhook').button('reset');
        },
        success: function(json) {
            if (json['success']) {
                alert(json['success']);
            } else if (json['error']) {
                alert(json['error']);
            }

            location.reload();
        },
        error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
        }
    });
}

function resetCustomisations() {
    $('#input-background-colour').colorpicker('setValue', '#ffffff');
    $('#input-font-colour').colorpicker('setValue', '#848484');
    $('#input-logo-theme').val('#7a7a7a');
}

$(document).ready(function() {
    $('#input-background-colour').colorpicker({
        align: 'left',
        customClass: 'colorpicker-2x',
        sliders: {
            saturation: {
                maxLeft: 200,
                maxTop: 200
            },
            hue: {
                maxTop: 200
            },
            alpha: {
                maxTop: 200
            }
        }
    });

    $('#input-font-colour').colorpicker({
        align: 'left',
        customClass: 'colorpicker-2x',
        sliders: {
            saturation: {
                maxLeft: 200,
                maxTop: 200
            },
            hue: {
                maxTop: 200
            },
            alpha: {
                maxTop: 200
            }
        }
    });
    
    $('#input-background-colour').on('changeColor', function(event) {
        $('#input-background-colour-swatch > i').css('background-color', event.color.toString());
    });

    $('#input-font-colour').on('changeColor', function(event) {
        $('#input-font-colour-swatch > i').css('background-color', event.color.toString());
    });
});
</script>
<?php echo $footer; ?>