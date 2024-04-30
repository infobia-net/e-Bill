<?php

// Heading
$_['heading_title']                  = 'Revolut Payment Gateway - Global Settings';
$_['heading_title_card']             = 'Revolut Card Gateway';
$_['heading_title_pay']              = 'Revolut Pay Gateway';
$_['heading_title_prb']              = 'Revolut Apple Pay / Google Pay';

// Text
$_['text_extension']                 = 'Extensions';
$_['text_success']                   = 'Success: You have modified Revolut Gateway details!';
$_['text_edit']                      = 'Edit Revolut Gateway';
$_['text_edit_card']                 = 'Edit Revolut Card Payment Gateway';
$_['text_edit_pay']                  = 'Edit Revolut Pay Payment Gateway';
$_['text_edit_prb']                  = 'Edit Revolut Apple Pay / Google Pay';
$_['text_revolut']                   = '<a target="_BLANK" href="https://www.revolut.com/"><img src="view/image/payment/revolut.png" alt="Revolut Gateway" title="Revolut Gateway" style="height:50px; border:1px solid #EEEEEE;" /></a>';
$_['text_welcome']                   = '<p>Welcome to <b>Revolut Gateway for OpenCart plugin!</b></p>' .
                                       '<p>To start accepting payments from your customers at great rates, you\'ll need to follow three simple steps:</p>' .
                                       '<p><ul style="list-style-type:disc;">' .
                                       '  <li><a href="https://business.revolut.com/signup" target="_BLANK">Sign up for Revolut Business</a> if you don\'t have an account already</li>' .
                                       '  <li>Once your Revolut Business account has been approved, <a href="https://business.revolut.com/merchant" target="_BLANK">apply for a Merchant Account</a>.</li>' .
                                       '  <li><a href="https://business.revolut.com/settings/merchant-api" target="_BLANK">Get your Production API key</a> and paste it in the corresponding field below</li>' .
                                       '</ul></p>' .
                                       '<p><a href="https://www.revolut.com/business/online-payments" target="_BLANK">Find out more</a> about why accepting payments through Revolut is the right decision for your business.</p>' .
                                       '<p>If you\'d like to know more about how to configure this plugin for your needs, <a href="https://developer.revolut.com/docs/accept-payments/plugins/opencart/installation" target="_BLANK">check out our documentation</a>.';
$_['text_automatic']                 = 'Automatic';
$_['text_manual']                    = 'Manual';
$_['text_webhook_success']           = 'Successfully set up Webhook!';
$_['text_webhook_delete_success']    = 'Successfully deleted Webhook!';
$_['text_payment_info']              = 'Revolut Gateway Information';
$_['text_reference']                 = 'Order Reference ID<p style="font-size:10px;">(Same as OpenCart Order ID)</p>';
$_['text_id']                        = 'Revolut Order ID';
$_['text_refund']                    = 'Refund';
$_['text_refund_amount']             = 'Refund Amount';
$_['text_order_total']               = 'Order Amount';
$_['text_refunded_total']            = 'Refunded Amount';
$_['text_refundable_total']          = 'Refundable Amount';
$_['text_revolut_order_state']       = 'Revolut Order State';
$_['text_transactions']              = 'Transactions';
$_['text_refund_success']            = 'Successfully refunded Order #%s!';
$_['text_confirm_refund']            = 'Are you sure you want to refund this payment?';
$_['text_card_field']                = 'Card Field';
$_['text_popup']                     = 'Popup';
$_['text_dark']                      = 'Dark Theme';
$_['text_light']                     = 'Light Theme';

// Entry
$_['entry_api_key']                  = 'API secret key';
$_['entry_test']                     = 'Sandbox Mode';
$_['entry_capture_mode']             = 'Capture Mode';
$_['entry_payment_title']            = 'Payment Title';
$_['entry_payment_view']             = 'Payment View';
$_['entry_total']                    = 'Minimum Order Total';
$_['entry_webhook']                  = 'Webhook Setup';
$_['entry_capture_status']           = 'Capture Status';
$_['entry_cancelled_status']         = 'Cancelled Status';
$_['entry_completed_status']         = 'Completed Status';
$_['entry_authorised_status']        = 'Authorised Status';
$_['entry_failed_status']            = 'Failed Status';
$_['entry_pending_status']           = 'Pending Status';
$_['entry_processing_status']        = 'Processing Status';
$_['entry_refunded_status']          = 'Refunded Status';
$_['entry_geo_zone']                 = 'Geo Zone';
$_['entry_status']                   = 'Status';
$_['entry_upsell']                   = 'Revolut Reward banner';
$_['help_upsell']                    = 'Customers can get instructions to signup to Revolut and get Rewarded';
$_['entry_status_revolut_pay']       = 'Revolut Pay';
$_['entry_sort_order']               = 'Sort Order Card';
$_['entry_sort_order_revolut_pay']               = 'Sort Order Revolut Pay';
$_['entry_customise']                = 'Customise Card Widget Style';
$_['entry_background_colour']        = 'Card Widget Background Colour';
$_['entry_font_colour']              = 'Card Widget Font Colour';
$_['entry_logo_theme']               = 'Revolut Logo Theme';
$_['entry_reset']                    = 'Reset Customisations';

// Column
$_['column_date_added']              = 'Date Added';
$_['column_state']                   = 'Order State';
$_['column_amount']                  = 'Amount';

// Tab
$_['tab_general']                    = 'General';
$_['tab_widget_style']               = 'Card Widget Style';
$_['tab_addional_settings']          = 'Addional Settings';
$_['tab_order_status']               = 'Order Status';

// Button
$_['button_setup']                   = 'Set Up';
$_['button_delete']                  = 'Delete';
$_['button_refund']                  = 'Refund';
$_['button_reset']                   = 'Reset';

// Help
$_['help_test']                      = 'Use the live or testing (sandbox) gateway server to process transactions?';
$_['help_total']                     = 'The checkout total the order must reach before this payment method becomes active';
$_['help_payment_title']             = 'Title set here will appear as the payment method name for customers when checking out. If no Payment Title is set, \'Pay with Card (Revolut Gateway)\' will be shown.';
$_['help_payment_view']              = 'Choose between Card Field or Popup for the Revolut Card Widget.<br /><br />Card Field: The payment card field will be displayed directly on your checkout page upon confirmation of order.<br /><br />Popup: A popup with the payment card field will be displayed upon confirmation of order.';
$_['help_capture_mode']              = 'AUTOMATIC: The order is captured automatically after payment authorisation.<br /><br />MANUAL: The order is not captured automatically. You must manually capture the order later.';
$_['help_webhook']                   = 'Set up the Webhook to sync your OpenCart orders with Revolut\'s side';
$_['help_logo_theme']                = 'This controls the colour of the "Powered by Revolut" logo';
$_['help_customise']                 = 'By enabling this option, you can customise the style of the Revolut Card Widget.<br /><br />Do note that this only applies to the Card Field option for Payment View and will not affect the style of Popup.';
$_['help_background_colour']         = 'This controls the background colour of the Revolut Card Widget for Card Field';
$_['help_font_colour']               = 'This controls the text colour of the Revolut Card Widget for Card Field';
$_['help_reset']                     = 'This will reset all customisations to the default configurations for the Revolut Card Widget';
$_['help_capture_status']            = 'The Order Status ID that will trigger the capturing of the Revolut order payment when Capture Mode is set to MANUAL.<br /><br />This means that once your orders reach the Order Status set here, the plugin will send a request to Revolut to capture the payment.';

// Error
$_['error_permission']               = 'Warning: You do not have permission to modify payment Revolut Gateway!';
$_['error_api_key']                  = 'API Key required!';
$_['error_webhook_not_setup']        = 'Warning: Failed to set up webhooks! Please check and correct the API key.';
$_['error_api_key_config']           = 'Warning: Missing configuration, Please make sure that <b>Revolut Payment Gateways</b> plugin installed and configured properly!';
$_['error_unknown']                  = 'Error: Unexpected HTTP Response Code: %s received! Please try again shortly after or contact support for assistance.';
$_['error_400']                      = 'Error: Bad Request - Request is invalid! Please try again or contact support for assistance.';
$_['error_401']                      = 'Error: Unauthorized - Please ensure that your Merchant API Key is valid and Sandbox mode option is correct!';
$_['error_403']                      = 'Error: Forbidden - You do not have access to the requested resource or action is forbidden!';
$_['error_404']                      = 'Error: Not Found - ID provided is invalid! Please try again or contact support for assistance.';
$_['error_422']                      = 'Error: Insufficient Funds - Refund amount is not valid!';
$_['error_429']                      = 'Error: Too Many Requests - You are sending too many requests! Please wait for awhile before trying again.';
$_['error_500']                      = 'Error: Internal Server Error - Revolut is having a problem with their server. Please try again later.';
$_['error_503']                      = 'Error: Service Unavailable - Revolut is temporarily offline for maintenance. Please try again later.';
$_['error_invalid_request']          = 'Error: Invalid request made! Please try again or contact support for assistance.';
$_['error_invalid_refund_amount']    = 'Error: Invalid refund amount!';
$_['error_order_statuses']           = 'Please be reminded to set the order statuses under the Order Status Tab to prevent problems with incorrect data.';
