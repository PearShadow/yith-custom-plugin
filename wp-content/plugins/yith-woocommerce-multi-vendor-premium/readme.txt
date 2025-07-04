== YITH WooCommerce Multi Vendor Premium ===

Contributors: YITH
Tags: product vendors, vendors, vendor, multi store, multi vendor, multi seller, woocommerce product vendors, woocommerce multi vendor, commission rate, seller, shops, vendor shop, vendor system, woo vendors, wc vendors, e-commerce, yit, yith, yithemes
Requires at least: 6.6
Tested up to: 6.8
Stable tag: 5.4.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Multi vendor e-commerce is a new idea of e-commerce platform that is becoming more and more popular in the web.

== Changelog ==
= 5.4.0 - Released on 28 April 2025 =

* New: support for WordPress 6.8
* Update: YITH plugin framework
* Fix: filters style in Vendor dashboard
* Fix: vendor registration fee not being processed
* Fix: sync fields with original product for translated using WPML
* Fix: 'edit_shop_order' cap for order created by admin
* Fix: missing field _payment_method on order save if customer data is hidden

= 5.3.0 - Released on 17 March 2025 =

* New: support for WooCommerce 9.8
* Update: YITH plugin framework
* Fix: issue with vendor registration product and checkout block

= 5.2.1 - Released on 18 February 2025 =

* Fix: prevent error "implode(): Argument #2 ($array) must be of type ?array, string given"
* Fix: fixed variation visibility in the integration with YITH Frontend Manager

= 5.2.0 - Released on 5 February 2025 =

* New: support for WooCommerce 9.7
* Update: YITH plugin framework
* Fix: Stripe Connect integration

= 5.1.0 - Released on 10 December 2024 =

* New: support for WooCommerce 9.5
* New: support for WordPress 6.7
* Update: YITH plugin framework
* Fix: redirect become-a-vendor page for guest after registration
* Fix: multiple send for product review email
* Dev: new filter 'yith_wcmv_stripe_connect_oauth_link'

= 5.0.0 - Released on 29 October 2024 =

* New: support for WooCommerce 9.4
* New: admin panel UI
* New: vendor registration fee module
* New: options to choose the product types a vendor can sell
* Update: YITH plugin framework
* Fix: error when retrieve commissions for a specific period in the admin legacy reports
* Fix: condition logic to set "pending" to a product when a vendor updates it
* Fix: vendor can't see order with WPML and HPOS enabled
* Fix: REST API undefined method getMessage
* Dev: new filter yith_wcmv_check_suborder_exists

= 4.27.0 - Released on 10 September 2024 =

* New: support for WooCommerce 9.3
* Update: YITH plugin framework
* Fix: product set in pending review updating stock by order item meta
* Fix prevent vendor to edit order line items on YITH Frontend Manager.

= 4.26.0 - Released on 13 August 2024 =

* New: support for WooCommerce 9.2
* Update: YITH plugin framework
* Fix: prevent fatal error if the order does not return any line item
* Fix: vendor shipping using checkout block
* Tweak: added setup and restore locale to all emails to improve WPML support
* Dev: new filter yith_wcmv_get_terms_vendors_list

= 4.25.0 - Released on 24 June 2024 =

* New: support for WordPress 6.6
* New: support for WooCommerce 9.1
* Update: YITH plugin framework

= 4.24.1 Released on 1 July 2024 =

* Fix: Removed all polyfill.io references

= 4.24.0 - Released on 24 June 2024 =

* New: support for WooCommerce 9.0
* Update: YITH plugin framework
* Fix: integrate vendor announcements in frontend manager
* Dev: filter yith_wcmv_vendor_create_error_notice
* Dev: filter yith_wcmv_vendor_set_in_pending_status
* Dev: filter yith_wcmv_handle_staff_action_url

= 4.23.0 - Released on 23 May 2024 =

* New: support for WooCommerce 8.9
* Update: YITH plugin framework
* Fix: search per single vendor not working on Admin dashboard
* Fix customer details visibility for commissions table in vendor dashboard
* Fix: vendor can see all data in the report, not just the one about own orders
* Fix: undefined index "post_status"
* Dev: new parameter for hook "yith_wcmv_order_details_page_commission_message"

= 4.22.0 - Released on 15 April 2024 =

* New: support for WooCommerce 8.8
* Update: YITH plugin framework
* Fix: issue with vendor cart elements array on the vendor shipping package

= 4.21.0 - Released on 27 March 2024 =

* New: support for WooCommerce 8.7
* New: support for WordPress 6.5
* Update: YITH plugin framework
* Tweak: include commission status for export
* Fix: vendor sales count wrong in case HPOS featue is enabled

= 4.20.0 - Released on 20 February 2024 =

* New: support for WooCommerce 8.6
* Update: YITH plugin framework
* Tweak: add placeholders in the payout email notification

= 4.19.0 - Released on 29 January 2024 =

* New: support for WooCommerce 8.5
* Fix: closing correctly <td>
* Fix: show to vendor correct image sizes to use
* Fix: overwrite global shipping methods if vendor has shipping enabled
* Fix: init number value for multivendor edit modal
* Update: YITH plugin framework

= 4.18.0 - Released on 14 December 2023 =

* New: support for WooCommerce 8.4
* New: Option to select the order status to be used to pay vendor's commissions
* Fix: custom actions on announcements
* Update: YITH plugin framework
* Dev: new filter 'yith_wcmv_shipping_line_total'
* Dev: new filter 'yith_wcmv_vendor_shipping_rate'

= 4.17.0 - Released on 16 November 2023 =
* New: Option to select the order status to be used to pay vendor's commissions
* Update: YITH plugin framework
* Update: Language files

= 4.16.0 - Released on 14 November 2023 =

* New: support for WordPress 6.4
* New: support for WooCommerce 8.3
* Update: YITH plugin framework
* Tweak: Stripe Connect gateway to process vendors commissions payment with any payment gateway on checkout
* Tweak prevent fatal error if social does not exists
* Dev: filter yith_wcmv_commission_vendor_id
* Dev: filter yith_wcmv_shipping_sub_tabs
* Dev: filter yith_wcmv_vendor_polices_options

= 4.15.0 - Released on 09 October 2023 =

* New: support for WooCommerce 8.2
* Update: YITH plugin framework
* Dev: filter yith_wcmv_vendor_updated
* Dev: filter yith_wcmv_vendor_deleted

= 4.14.0 - Released on 12 September 2023 =

* New: support for WooCommerce 8.1
* Update: YITH plugin framework
* Fix: retrieve only vendor products on frontend manager report for vendors
* Fix: filter report stock by vendor on frontend manager report stock

= 4.13.0 - Released on 08 August 2023 =

* New: support for WooCommerce 8.0
* New: support for WordPress 6.3
* Update: YITH plugin framework
* Fix: country/state fields in become a vendor form
* Fix: set skip review based in general option
* Fix: suborders not filtered on vendor side (Frontend Manager view)
* Fix: prevent warning "count(): Parameter must be an array or an object that implements Countable"
* Fix: refund deleted orders

= 4.12.0 - Released on 27 Jun 2023 =

* New: support for WooCommerce 7.9
* New: support for WooCommerce custom order tables
* New: support for WooCommerce Blocks
* Update: YITH plugin framework
* Fix: vendor quick info email reply-to header
* Tweak: vendor quick info email shows URL from where it was sent

= 4.11.0 - Released on 19 Jun 2023 =

* New: support for WooCommerce 7.8
* Update: YITH plugin framework
* Fix: products vendor quick bulk edit

= 4.10.0 - Released on 23 May 2023 =

* New: support for WooCommerce 7.7
* Update: YITH plugin framework
* Fix: allow setting a numeric slug for vendor
* Fix: if staff module is enabled, send 'new vendor order' email to all vendor staff
* Dev: new filter 'yith_wcmv_get_date_gmt' to filter date GMT format
* Dev: new filter 'yith_wcmv_remove_required_fields_on_additional' to filter required param for additional fields

= 4.9.0 - Released on 18 April 2023 =

* New: support for WooCommerce 7.6
* Update: YITH plugin framework
* Fix: set default value for ACF field
* Fix: add missing <tr> in vendor-new-order template
* Tweak: block shipping zone loop at the first match
* Tweak: remove WC Admin features in vendor dashboard to prevent forbidden request

= 4.8.0 - Released on 20 March 2023 =

* New: support for WooCommerce 7.5
* New: support for WordPress 6.1
* New: added support to search parameters in vendors query
* Update: YITH plugin framework
* Fix: integration issue with YITH Cost of Goods for WooCommerce
* Tweak: make sure vendors count method always returns an integer

= 4.7.0 - Released on 22 February 2023 =

* New: support for WooCommerce 7.4
* New: Catalan translation
* Update: YITH plugin framework
* Fix: custom field multi-select not visible in admin and frontend
* Fix: vendor quote editing capability using YITH WooCommerce Request a Quote
* Fix: Allow WPML translation for dynamic registration fields
* Fix: Double-check if shipping costs are enabled before adding them to vendor emails
* Dev: new filter 'yith_wcmv_commissions_settings' to filter commission panel settings array
* Dev: new filter 'yith_wcmv_dashboard_settings' to filter dashboard panel settings array
* Dev: new filter 'yith_wcmv_frontend_pages_settings' to filter frontend pages settings array
* Dev: new filter 'yith_wcmv_vendors_settings' to filter vendor panel settings array
* Dev: new action 'yith_wcmv_before_vendors_list' triggered before vendor list shortcode output
* Dev: new action 'yith_wcmv_after_vendors_list' triggered after vendor list shortcode output

= 4.6.0 - Released on 20 January 2023 =

* New: support for WooCommerce 7.3
* New: added new param perPageSearch to data for dashboard-report script
* Update: YITH plugin framework

= 4.5.0 - Released on 22 December 2022 =

* New: support for WooCommerce 7.2
* Update: YITH plugin framework
* Fix: privacy and terms and conditions notice not shown correctly on admin dashboard when pages are updated
* Fix: paypal email address not shown in vendor registration form
* Fix: allow float number for product commission rate
* Fix: vendor products admin's review check
* Tweak: refactoring vendor related products handler

= 4.4.0 - Released on 17 November 2022 =

* New: support for WooCommerce 7.1
* Update: YITH plugin framework
* Update: language files
* Fix: rate display value in commissions table
* Fix: commission amount with coupon not included
* Fix: coupon count for vendor dashboard
* Fix: missing param for WooCommerce hooks "woocommerce_order_item_meta_start"

= 4.3.0 - Released on 14 October 2022 =

* New: support for WooCommerce 7.0
* Update: YITH plugin framework
* Update: language files
* Fix: shipping cost not applied when vendors use product shipping classes
* Fix: vendor store image in shortcode [yith_wcmv_list]
* Fix: capabilities issue when assigning an existing vendor-user role to a new vendor
* Fix: email notification when vendor edits a product in pending status
* Fix: vendor taxonomy metabox for custom post type
* Tweak: improved WPML support
* Tweak: auto-delete commissions after deleting the related order
* Dev: new filter 'yith_wcmv_vendor_fields'
* Dev: new filter 'yith_wcmv_skip_refund_process'

= 4.2.0 - Released on 13 September 2022 =

* New: support for WooCommerce 6.9
* New: show vendor legal notes in store header
* New: let vendors import/export products through CSV
* New: new vendor report dashboard in frontend manager
* Update: YITH plugin framework
* Update: language files
* Fix: shipping cost calculation for vendors' methods
* Fix: products' reviews visibility in vendors dashboard
* Tweak: allow HTML tags in vendor description
* Tweak: show number of items in vendor lists (admin side)
* Tweak: improved vendor registration form handler
* Dev: new filter 'yith_wcmv_redirect_after_become_a_vendor'
* Dev: new filter 'yith_wcmv_register_commission_for_order_item'

= 4.1.0 - Released on 11 August 2022 =

* New: support for WooCommerce 6.8
* Update: YITH plugin framework
* Update: language files
* Fix: order note not shown on frontend manager (by vendor side)
* Fix: restored params for filter 'yith_wcmv_stripe_connect_transfer_args'
* Fix: free shipping method for vendor

= 4.0.4 - Released on 01 August 2022 =

* Fix: commissions list table pagination
* Fix: orders list table count
* Fix: shipping zone postcode restriction
* Tweak: add style tag to allowed html for terms-of-service.php template

= 4.0.3 - Released on 27 July 2022 =

* Fix: commissions list table in vendor new order email
* Fix: vendor products add to cart when shipping extra costs are applied
* Fix: commissions CSV export

= 4.0.2 - Released on 25 July 2022 =

* Fix: support for YITH Frontend Manager for WooCommerce 1.17.1
* Fix: store cache only for valid vendors
* Fix: remove vendor owner
* Update: language files

= 4.0.1 - Released on 19 July 2022 =

* Fix: undefined JavaScript function jQuery.fn.block
* Fix: error "Call to a member function add_role() on bool"
* Update: language files

= 4.0.0 - Released on 18 July 2022 =

* New: redesigned UI / improved plugin UX
* New: dashboard that allows admin to keep track of vendors generated commissions
* New: custom fields in Become a Vendor form
* New: CRUD REST API
* New: commissions CSV export
* New: Vendor announcements module - Create announcements to be shown on vendors' dashboards
* New: Vendor staff module - Let vendors add/remove staff members to their stores
* New: Vendor report abuse module
* New: header style for the store page
* New: enable/disable vendor capability to add tags to products
* New: enable/disable vendor capability to edit his store slug
* New: modal to create/edit vendor
* New: cache system to improve plugin performance
* Update: YITH plugin framework
* Update: language files
* Tweak: completely refactored plugin code
* Tweak: load styles and scripts only when needed
* Tweak: refactored Gutenberg blocks
* Security: block admin access for invalid user with vendor role


= 3.18.0 - Released on 12 July 2022 =

* New: support for WooCommerce 6.7
* Update: YITH plugin framework

= 3.17.0 - Released on 15 June 2022 =

* New: support for WooCommerce 6.6
* Update: YITH plugin framework
* Dev: new filter 'yith_wcmv_show_vendor_bank_account_field'

= 3.16.0 - Released on 10 May 2022 =

* New: support for WooCommerce 6.5
* New: support for WordPress 6.0
* Update: YITH plugin framework
* Fix: show related vendor products

= 3.15.0 - Released on 04 April 2022 =

* New: support for WooCommerce 6.4
* Update: YITH plugin framework
* Dev: yith_wcmv_add_store_page_header_vendor_id hook to filter the vendor id in the vendor store header shortcode

= 3.14.0 - Released on 28 February 2022 =

* New: support for WooCommerce 6.3
* Update: YITH plugin framework

= 3.13.1 - Released on 23 February 2022 =

* Tweak: support for YITH WooCommerce Order & Shipment Tracking 2.0
* Fix: remove Google social icons in vendor profile
* Dev: yith_wcmv_sales_by_vendor_allowed_order_status hook to filter orders status in vendor report

= 3.13.0 - Released on 14 February 2022 =

* New: support for WooCommerce 6.2
* Update: YITH plugin framework

= 3.12.1 - Released on 13 January 2022 =

* Fix: use wp_doing_ajax() instead of the deprecated function is_ajax()

= 3.12.0 - Released on 12 January 2022 =

* New: ability to sort vendors by registration date
* New: support for WooCommerce 6.1
* New: support for WordPress 5.9
* Update: YITH plugin framework
* Tweak: show vendor notes on parent order
* Fix: unable to sort vendors by commission rate
* Fix: error in commissions email if the order doesn't exist anymore
* Fix: add default value to woocommerce_coupon_data_panels hook in order to prevent errors
* Dev: yith_wcmv_show_vendor_order_notes_on_parent filters
* Dev: yith_wcmv_add_order_note_on_suborder action

= 3.11.0 - Released on 15 December 2021 =

* New: support for WooCommerce 6.0
* Update: YITH plugin framework
* Fix: not possible to use [qty] shortcode in shipping cost
* Fix: internal server error on order edit page

= 3.10.0 - Released on 05 November 2021 =

* New: support for WooCommerce 5.9
* Update: YITH plugin framework

= 3.9.0 - Released on 14 October 2021 =

* New: support for WooCommerce 5.8
* Update: YITH plugin framework
* Dev: filter yith_wcmv_exclude_cog_from_commission to change the commission amount when use COG plugin
* Dev: filter 'yith_wcmv_quick_info_placeholder'
* Dev: action 'yith_wcmv_vendor_tab_information' inside vendor tab template

= 3.8.0 - Released on 28 September 2021 =

* New: support for WooCommerce 5.7
* Update: YITH plugin framework
* Fix: vendor unable to manage order notes in the Frontend Manager
* Fix: resolved duplicated email for customer order notes
* Fix: report commissions improvements
* Fix: debug info feature removed for all logged in users

= 3.7.13 - Released on 24 August 2021 =

* New: support for WooCommerce 5.6
* Update: YITH plugin framework
* Fix: parameters not escaped before outputting them back in admin pages
* Fix: empty Polylang translations array
* Fix: lost vendor name in orders table if shop owner was changed
* Fix: shipping class on variation doesn't work when using "Same as parent" option value
* Dev: filter 'yith_wcmv_get_shipping_methods' to manage the available shipping methods

= 3.7.12 - Released on 27 June 2021 =

* New: support for WordPress 5.8
* New: support for WooCommerce 5.5
* Update: YITH plugin framework

= 3.7.11 - Released on 10 June 2021 =

* New: support for WooCommerce 5.4
* Update: YITH plugin framework

= 3.7.10 - Released on 12 May 2021 =

* New: support for WooCommerce 5.3
* New: send order information when a commission is paid with stripe connect
* Update: YITH plugin framework
* Fix: vendor can't add products on their quotes
* Fix: wrong currency for vendor shipping method
* Dev: action yith_wcmv_add_custom_upload_fields_scritp to use a custom upload script
* Dev: filter yith_wcmv_add_custom_upload_fields_scritp to skip to load the plugin upload script
* Dev: filter yith_wcmv_report_abuse_email to change the report abuse email

= 3.7.9 - Released on 19 April 2021 =

* New: support for WooCommerce 5.2
* Update: YITH plugin framework
* Tweak: base currency information in vendor shipping panel
* Tweak: prevent to add an empty space in vendor store URL
* Fix: shipping cost sync from parent order to child order
* Fix: remove the underline in vendor store URL
* Fix: wrong comments count on vendors' dashboard
* Fix: new order email to vendor will be sent for parent order
* Fix: filter commissions by vendor are shown on vendor dashboard
* Fix: hardcoded strings
* Dev: yith_wcmv_get_allowed_countries hook to filter allowed countries in vendor shipping panel
* Dev: yith_wcmv_get_continents hook to filter the continents in vendor shipping panel
* Dev: yith_wcmv_load_shipping_methods hook to filter the shipping methods in vendor shipping panel
* Dev: new filter 'yith_wcmv_recipient_vendor_quick_info'

= 3.7.8 - Released on 09 March 2021 =

* New: support for WordPress 5.7
* New: support for WooCommerce 5.1
* Update: YITH plugin framework
* Fix: Unable to sync the refunded order status from child-order to parent-order
* Fix: Corrected default value in the vendor list shortcode
* Fix: Corrected pagination in the vendor list shortcode

= 3.7.7 - Released on 09 February 2021 =

* New: support for WooCommerce 5.0
* Update: YITH plugin framework
* Tweak: use the global $product object in products by vendor shortcode
* Tweak: add SKU in the new order email for vendors
* Fix: vendor shipping cost doesn't support [qty] and [cost] shortcode
* Remove: google+ social field

= 3.7.6 - Released on 13 January 2021 =

* New: Support for WooCommerce 4.9
* Update: Plugin Framework
* Fix: Translation issue on vendor menu
* Fix: Wrong format and timezone for the created date in commissions details page and email
* Fix: Wrong sales reports link on vendor admin area
* Fix: Sales report icon missing on vendor menu
* Fix: Coupons icon missing on vendor menu

= 3.7.5 - Released on 10 December 2020 =

* New: Support for WooCommerce 4.8
* New: Support for WordPress 5.6
* Update: Plugin Framework
* Fix: Vendors missing menu item after WooCommerce update
* Fix: Vendors see duplicated Order Sales Reports menu item
* Fix: Unable to hide shipping and billing information for vendor in orders list
* Fix: Double orders menu item for website admin
* Fix: Postcode validation fails
* Fix: Prevent error "call method on null" during email generation
* Fix: Wrong status change for shipping commissions
* Fix: Missing publish product capabilities after a shop owner changes their frontpage settings
* Fix: Missing admins after a shop owner change their frontpage settings
* Fix: Wrong currency conversion of the minimum order amount for free shipping with Aelia multi-currency
* Dev: yith_wcmv_process_registration filter to allow third-party plugin process required custom fields

= 3.7.4 - Released on 12 November 2020 =

* Tweak: Vendor email support for Multibanco
* Fix: Wrong status commission change

= 3.7.3 - Released on 10 November 2020 =

* New: Support for WooCommerce 4.7
* New: Possibility to update plugin via WP-CLI
* New: Possibility to update plugin via ManageWP
* New: Support for Hello Elementor theme
* Tweak: Update plugin framework
* Fix: Missing default value for order capabilities
* Fix: Unable to complete the order with Stripe Connect direct charges
* Fix: Wrong subject for vendor new order email
* Fix: Layout issues in edit vendor profile on admin area
* Fix: Suborder without customer set
* Fix: Unable to set Featured Products management for each vendor
* Dev: yith_wcmv_do_404_redirect filter to skip the 404_redirect if vendor haven't selling capabilities
* Dev: yith_wcmv_404_redirect action to use an alternative 404 redirect function
* Dev: yith_wcmv_is_free_shipping_coupon to filter the FREE shipping coupon

= 3.7.2 - Released on 16 October 2020 =

* New: Support for WooCommerce 4.6
* Fix: Pagination issue on vendors list shortcode
* Fix: Orders and Sales Reports menu item disappears in vendor dashboard with WooCommerce 4.5
* Fix: Report issues with Aelia multi-currency plugin
* Fix: variable $data_last_modified doesn't exists"
* Fix: Stripe connect integration

= 3.7.1 - Released on 14 September 2020 =

* New: Support for WooCommerce 4.5
* New: Support for WordPress 5.5
* Fix: Issue on vendor's report section
* Fix: Options dependencies doesn't work
* Fix: Report Abuse doesn't work with the Flatsome theme
* Fix: Remove published_products capability from old vendor users
* Fix: Unable to show Refund Policy inside the shipping info tab in single product page
* Dev: yith_wcmv_set_product_to_orphan_on_vendor_delete to skip set product to draft if a vendor was deleted

= 3.7.0 - Released on 22 July 2020 =

* New: Support for WooCommerce 4.3
* New: Update plugin framework
* New: Ability to refund paid commissions with YITH WooCommerce Account Funds Premium (Version 1.4.0)
* New: Privacy policy and Terms and conditions management for vendors
* New: Greek language
* Tweak: Suppress WordPress notification in admin area for vendors
* Tweak: Suppress WooCommerce notification in admin area for vendors
* Fix: Multiple emails when changing commissions status via bulk action
* Fix: untrashed and clone products don't respect product limit amount
* Fix: Screen options for Commissions table doesn't work
* Fix: Invalid argument for foreach if used with YITH WooCommerce Dynamic Pricing and Discount
* Fix: Unable to save customers email in coupons
* Fix: Unable to save per_page options in commissions page
* Fix: Coupon expiry date doesn't shown for vendor's coupon
* Fix: Lost product commission after a vendor saves a product
* Fix: Parent Order and Suborder refunds synchronization
* Fix: Don't show WooCommerce My Account after vendor registration
* Dev: yith_wcmv_show_single_product_commission_tab_capability hook to show product commission tab for all users

= 3.6.2 - Released on 27 May 2020 =

* New: Support for WooCommerce 4.2
* New: Select/Remove all countries in shipping area
* Update: Plugin framework
* Fix: Item restock two times on order cancelled

= 3.6.1 - Released on 04 May 2020 =

* New: Supporting WordPress 5.4
* New: Category arg in vendor name shortcode
* New: Add order notes in new order email for vendors
* Update: Plugin framework
* Fix: Unable to save non-unique line item order meta
* Fix: Unable to register as a vendor in Frontend Manager page
* Fix: Prevent error of call method of non object in Google Maps widget with Elementor
* Fix: Unable to to see and edit orders with WPML
* Fix: Unable to use different shipping rules for same country
* Fix: Unable to show TinyMCE editor for vendor description for administrator
* Fix: Unable to use HTML tag for vendor description with YOAST SEO plugin enabled
* Dev: yith_wcmv_show_commission_page to hide the commissions page in admin area
* Dev: yith_wcmv_widget_quick_form_email_message to filter the customer message in quick info form
* Dev: yith_wcmv_quick_info_form_validation to filter the quick info form validation
* Dev: new filter 'yith_wcmv_total_sales_title'

= 3.6.0 - Released on 11 March 2020 =

* New: Supporting WooCommerce 4.0
* New: Supporting WordPress 5.4
* New: Update plugin framework
* New: Column "Parent Order" in orders list table (vendor side)
* New: Vendor can search by parent order id
* New: Vendor id col in Vendors taxonomy page
* New: Option to set a custom recipient for pending product email
* New: Ability to translate Vendor Shipping Policy and Vendor Refund Policy with WPML
* Update: Plugin framework
* Tweak: Set template_base for all plugin's emails
* Tweak: New commissions refund management
* Tweak: Allow to use custom locale for plugin text domain
* Tweak: WPML integration
* Tweak: New register_taxonomy management
* Fix: Missing default value in vendor object
* Fix: Try to use non numeric value like number
* Fix: Wrong text domain and translation issues
* Fix: Wrong order amount in WooCommerce > Analytics > Orders section
* Fix: Wrong order count in WooCommerce > Analytics > Orders section
* Fix: Wrong order amount in WooCommerce > Analytics > Revenue section
* Fix: Wrong order count in WooCommerce > Analytics > Revenue section
* Fix: Undefined index 's' issue in orders section
* Fix: Missing $product arg in woocommerce_attribute_label hook
* Fix: $is_visible arg in woocommerce_order_item_name hook
* Fix: Unable to assign vendor to a product
* Fix: Unable to set shipping method for vendors
* Fix: Style issues on shipping panel for vendors
* Fix: Show refund information in single order page only if needed
* Fix: Show refund information in single commission page only if needed
* Fix: Show refund amount in single commission template
* Fix: Wrong template_base param for plugin's emails
* Dev: add yith_wcmv_register_commission_refund action after register commission refunded
* Dev: add yith_wcmv_delete_commission_refund action after delete commission refunded
* Dev: add yith_wcmv_get_translation_keys for term translation

= 3.5.2 - Released on 27 December 2019 =

* New: Support to WooCommerce 3.9
* Update: Spanish language
* Dev: yith_wcmv_remove_role_for_vendor_admins hook to filter the vendor role to remove for vendor admins

= 3.5.1 - Released on 11 December 2019 =

* Fix: Strip slash char in Vendor quick info email
* Fix: Prevent "call method of non object" error in commission's email
* Fix: Prevent "call property on null" error in commission's email
* Fix: index 'woocommerce' doesn't exists

 = 3.5.0 - Released on 04 November 2019 =

* New: Support for WooCommerce 3.8
* New: Support for WordPress 5.3
* New: Support for YITH WooCommerce Account Funds Premium 1.3.0
* New: Select whether to show the vendor's products during holiday closings in WooCommerce archive pages or not
* New: Bubble notification for Vendor's order
* Update: Italian language
* Update: Spanish language
* Update: Plugin framework
* Fix: Unexpected issue with WC_Eval_Math
* Fix: Unable to translate vendor name with WooCommerce Multilingual
* Fix: Unable to translate vendor name in taxonomy edit page with WPML
* Fix: Compatibility issue with YITH WooCommerce Booking (fixed availability issues on booking products)
* Fix: Vendor can see customer details in order preview
* Dev: yith_wcmv_skip_check_duplicate_term_name to skip check duplicated term name

= 3.4.0 - Released on 08th August, 2019 =

* New: Support for WooCommerce 3.7
* New: Admin can create vendor's order from admin area
* New: Default store header image
* New: Filter by Vendors in products list tables
* New: Search commissions by order id
* Tweak: Add 'vendor_id' meta data in Vendor suborder
* Tweak: Add support for WC_Eval_Math for shipping cost
* Update: All language files
* Fix: Fatal error in single order and single commission page in admin area with WPML and WooCommerce Multilingual
* Fix: Style issues with Storefront theme
* Fix: Some style bugs in admin area
* Fix: Aelia Currency Switcher can't convert the vendor shipping cost
* Fix: Class YITH_Multi_Vendor_Shortcodes doesn't exists during ajax call
* Fix: Multiste support on vendor creation
* Dev: Add new hook yith_wcmv_send_vendor_quick_info_email
* Dev: Add new hook yith_wcmv_send_vendor_report_abuse_email
* Dev: Add new hook yith_wcmv_vendor_report_abuse_email_default_check
* Dev: Add new hook yith_wcmv_vendor_quick_info_email_default_check
* Dev: new parameter $yith_wc_email available for filter 'woocommerce_email_before_order_table' inside vendor emails
* Dev: Add new hook yith_wcmv_register_form_args

= 3.3.6 - Released on 12nd June, 2019 =

* Fix: Duplicated order email if no sync enabled
* Fix: Notice Trying to get property 'sync_enabled' of non-object

= 3.3.5 - Released on 12nd June, 2019 =

* New: Show products by vendor shortcode
* Update: Italian language
* Update: Plugin Framework
* Fix: no email sent on commission paid
* Dev: new filter 'yith_wcmv_send_commission_paid_email' to send or not the emails for commission paid

= 3.3.4 - Released on 07th June, 2019 =

* New: Send Cancelled Order Email for vendors in CC to website Admin
* New: WPML Support for Cancelled Order Email for vendors
* Fix: Prevent error for empty frontend object in quick info form
* Fix: Unable the change the word 'vendor' in become a vendor button
* Fix: Style issue on vendor dashboard if vendor haven't reviews and Enable review management is enabled for vendor
* Fix: Wrong product amount in new order email for vendors
* Fix: New order email haven't commission rate and commission amount value
* Dev: yith_wcmv_email_address_recipients_cancelled_order_vendor_email to filter vendor email in cancelled order email for vendors
* Dev: yith_wcmv_email_address_recipients_new_order_vendor_email to filter vendor email in new order email for vendors
* Dev: Replace old hook yith_wcmv_email_address_recipients_new_vendor_email with the new one yith_wcmv_email_address_recipients_new_order_vendor_email
* Dev: yith_wcmv_get_main_page_url to change the admin_url for email
* Dev: yith_wcmv_vendor_cart_elements_package

= 3.3.3 - Released on 17th May, 2019 =

* Tweak: Cross integration between YITH WooCommerce Request a quote Premium and YITH WooCommerce Deposits and Down Payments Premium

= 3.3.2 - Released on 16th May, 2019 =

* New: Support for YITH WooCommerce Customize My Account Page
* Fix: Order synchronization change status of balance suborder
* Fix: Undefined default args for YITH Vendors List widget during update action
* Dev: yith_wcmv_check_is_vendor_coupon_in_create_suborder to check if a coupon is linked to current vendor
* Dev: yith_wcmv_vendor_admin_settings_store_email_label to filter the Store Email label
* Dev: yith_wcmv_vendor_admin_settings_store_name_label to filter the Store Name label

= 3.3.1 - Released on 15th April, 2019 =

* Fix: Unable to set FREE SHIPPING for vendors

= 3.3.0 - Released on 15th April, 2019 =

* New: Support for WooCommerce 3.6
* New: Autoptimize Support
* New: Option to change the word Vendor/Vendors in all plugin string
* New: Option to hide shipping and billing information in order details page for vendors
* Update: Italian language
* Update: Spanish language
* Tweak: Change all add_post_meta to WooCommerce add_meta_data() method
* Tweak: Change all update_post_meta to WooCommerce update_meta_data() method
* Tweak: Add no-image class for vendor header if no image
* Tweak: Review and Rating count on vendors page
* Tweak: Add password strength meter on become a vendor form
* Tweak: Change soft deprecated method $coupon->is_valid() with the new one $coupon->is_coupon_valid()
* Fix: Removed YOAST SEO widgets and messages for vendor users
* Fix: Removed Jetpack widget and messages for vendor users
* Fix: Removed WooCommerce Suggestions for vendor users
* Fix: Removed "Import products by CSV" on vendor side
* Fix: Removed single product metabox added by ConvertKit plugin
* Fix: Removed Jetpack page in vendor admin area
* Fix: Change deprecated method $coupon->enable_free_shipping() with the new one $coupon->get_free_shipping()
* Fix: FREE Shipping form for vendors show the value "N/A" after save
* Fix: Google Map issue in Vendor page if Autoptimize Js minify option is enabled
* Fix: Prevent to call WC_AJAX::json_search_customer_name if doesn't exists
* Fix: Postcodes with wildcards doesn't works
* Fix: Coupon name missing in vendor's suborder
* Fix: Internationalized messages should not contain the '\r' escape sequence
* Fix: Order will set to pending status with frontend manager
* Fix: Wrong languages for new order email with WPML
* Fix: Shipping class doesn't works for vendors
* Fix: Unable to unset columns in commissions list table
* Dev: yith_wcmv_commission_details_current_user_can_edit_users hook to change the edit user capability check in commission details page
* Dev: yith_wcmv_get_commissions_args hook
* Dev: yith_wcmv_create_order_address_fields hook on create suborder
* Dev: yith_wcmv_remove_product_metaboxes hook to remove metabox added by 3rd-party plugins

= 3.2.13 - Released on 24th January, 2019 =

* New: Ability to include vendor from vendors list shortcode
* New: Option to change the background opacity for vendor's store header
* Fix: Redirect URL when a user switches to another user or switches back
* Fix: Font-awesome style is enqueue in all pages
* Fix: No Add-ons on vendor suborder with YITH WooCommerce Product Add-ons
* Tweak: Prevent upload button fails for string with single quote
* Update: All language files
* Update: Plugin FW
* Dev: yith_wcmv_widget_quick_form_email_headers hook to filter email headers
* Dev: yith_wcmv_add_vendor_taxonomy_to_product hook to skip add vendor to product method
* Dev: yith_wcmv_is_vendor_page hook to filter is_vendor_page method
* Dev: yith_wcmv_commissions_user_actions action
* Dev: yith_wcmv_vendor_list_shortcode_args hook to change vendor list shortcode args

= 3.2.12 - Released on 05th December, 2018 =

* New: Support for WordPress 5.0
* New: Support for Gutenberg
* New: Add Gutenberg Block for Multi Vendor shortcodes
* Fix: issue with shipping and a range of postcode
* Fix: Wrong status for parent order with BASC payment
* Fix: Vendor not associated to suborder on parent order change status
* Fix: product stock decreased twice when order is placed
* Fix: No tracking data in customer email
* Fix: prevent to add socials wrappers if no socials added

= 3.2.11 - Released on 31st October, 2018 =

* Fix: Vendor coupon have only one product
* Fix: Vendor shipping tab is showed also when it's empty

= 3.2.10 - Released on 25th October, 2018 =

* Update: POT file
* Fix: Notice "Trying to get property of non-object"
* Fix: Generic add/update/get meta methods should not be used for internal meta data, including "total_sales"

= 3.2.9 - Released on 23rd October, 2018 =

* Update: Plugin Core Framework

= 3.2.8 - Released on 19ht October, 2018 =

* Tweak: Removed old javascript code
* Fix: Check if $item_meta is an object in email template
* Fix: prevent fatal error on place order
* Fix: js file due to an incorrect italian translation
* Fix: coupon code is not applied
* Fix: Prevent fatal error with the hook yith_wcmv_single_product_commission_value_object and Frontend Manager plugin
* Dev: yith_wcmv_admin_localize_script_args hook to filter the admin.js localize args

= 3.2.7 - Released on 17ht October, 2018 =

* Fix: Prevent fatal error after update to new YITH Essential Kit for WooCommerce

= 3.2.6 - Released on 17ht October, 2018 =

* Fix: Unable to use coupon code with version 3.2.5

= 3.2.5 - Released on 16ht October, 2018 =

* New: Support for WooCommerce 3.5
* Update: Plugin Framework
* Tweak: Code refactoring and optimization
* Fix: Unable to calculate per quantity extra  shipping cost with WooCommerce 3.5

= 3.2.4 - Released on 05ht October, 2018 =

* New: Enable order synchronization for administrator
* Fix: get_plugin_Data doesn't exist
* Dev: yith_wcmv_company_legal_notes_field_title hook to change company legal notes string

= 3.2.3 - Released on 26th September, 2018 =

* New: Support for add item to quote
* Fix: Duplicated commissions in quote after edit it
* Fix: Typo in Privacy section

= 3.2.2 - Released on 25th September, 2018 =

* Update Plugin Framework
* Fix: Localization for commission_id string
* Fix: Search doesn't works in commissions page
* Fix: Type issue in privacy section
* Fix: Redirect URL when a user switches to another user or switches back.
* Fix: Duplicated order email for website admins
* Fix: Unable to save PayPal MassPAy Options
* Fix: Duplicated email for customer (parent and suborder)
* Fix: Missing wpml language during parent to suborder synchronization
* Fix: Call get_order_number on boolean in order email template
* Dev: yith_wcmv_commissions_step hook to change the commission step in input number fields
* Dev: yith_wcmv_hide_vendor_settings hook to force to show/hide vendor profile page
* Dev: yith_wcmv_commissions_list_table_class hook to change or extends the commissions list table class
* Dev: yith_wcmv_store_header_template_arg hook to filter the store header args
* Dev: yith_wcmv_website_target to change the target value (default: _blank)

= 3.2.1 - Released on 25th July, 2018 =

* New: Option to hide "Show on Google Maps" link in gmaps widget
* Fix: gmaps script don't load maps with version 3.1.0

= 3.2.0 - Released on 23rd July, 2018 =

* New: Integration for YITH WooCommerce Cost of Goods

= 3.1.0 - Released on 20th July, 2018 =

* New: Allow HTML tag for Refund Shipping Policy and Shipping Policy
* New: Support for YITH PayPal Payouts for WooCommerce Premium (version 1.0.0 or greater)
* New: Support for YOAST SEO
* New: Add shipping class management for vendors
* Fix: Wrong order total in orders list table for quote
* Fix: Missing vendor order item meta in order after a customer accept a quote
* Fix: Commissions rate and Earnings missing in quote email
* Fix: PayPal Email doesn't exists during edit/creation vendor account
* Dev: add yith_wcmv_store_location_zoom hook to manage gmaps param
* Dev: add yith_wcmv_store_location_disableDefaultUI hook to manage gmaps param
* Dev: add yith_wcmv_store_location_mapTypeControl hook to manage gmaps param
* Dev: add yith_wcmv_store_location_panControl hook to manage gmaps param
* Dev: add yith_wcmv_store_location_zoomControl hook to manage gmaps param
* Dev: add yith_wcmv_store_location_scaleControl hook to manage gmaps param
* Dev: add yith_wcmv_store_location_streetViewControl hook to manage gmaps param
* Dev: add yith_wcmv_store_location_rotateControl hook to manage gmaps param
* Dev: add yith_wcmv_store_location_rotateControlOptions hook to manage gmaps param
* Dev: add yith_wcmv_store_location_overviewMapControl hook to manage gmaps param
* Dev: add yith_wcmv_store_location_OverviewMapControlOptions hook to manage gmaps param
* Dev: add yith_wcmv_address_location_placeholder to change the location placeholder in registration form
* Dev: add yith_wcmv_pre_store_email to change the default store email
* Dev: add yith_wcmv_stripe_connect_option_description hook to change Stripe Connect option description
* Dev: add yith_wcmv_skip_wc_clean_for_fields_array to allow html for description, shipping policy and shipping refund policy

= 3.0.2 - Released on 16th June, 2018 =

* New: Option to remove PayPal Email in vendor registration form

= 3.0.1 - Released on 13rd June, 2018 =

* New: Option to prevent commissions on vendors product
* Tweak: Check if an instance of Stripe Connect fronted class already exists before create new instance.
* Tweak: Prevent Fatal Error in commission view details if website administrator delete orders in database table
* Fix: Prevent double commissions for Stripe Order with no vendor products
* Dev: Add yith_wcmv_is_vendor_profile_page_stripe_connect to change the stripe connect account page uri

= 3.0.0 - Released on 4th June, 2018 =

* New: Stripe Connect commissions integration
* New: Pay Commissions to vendors in admin area with Stripe Connect
* New: Pay commissions to vendors during checkout with Stripe Connect
* New: Integration with YITH Stripe Connect for WooCommerce Premium
* New: Multi Gateways Support
* New: Add phpunit test for plugin activation
* Tweak: Gateway Management
* Tweak: Vendors commissions management
* Tweak: Payments Management
* Tweak: Font-Awesome 5 support for old icons
* Fix: Wrong order_id in vendor email order
* Fix: Wrong Information on DPA "How To" text
* Fix: Owner information missing in termmeta table
* Fix: Addons object doesn't exists during plugin installation
* Update: All language files
* Remove: YITH_Vendor_Credit Class
* Dev: yith_wcmv_available_gateways hook to allow 3rd-party plugins to add gateways for multi vendors
* Dev: yith_wcmv_get_available_gateways hook to allow 3rd-party plugins to add gateways in available list
* Dev: yith_wcmv_show_enabled_gateways_table hook to show the enabled gateways
* Dev: yith_wcmv_payment_gateways_setting_columns hook to add/remove columns in gateways table
* Dev: yith_wcmv_external_gateway_{$slug} hook to change the object of YITH_Gateway class
* Dev: yith_wcmv_{$gateway->get_id()}_gateway_display_name hook to change the gateway display name
* Dev: yith_wcmv_{$gateway->get_id()}_options_admin_url hook to change the gateway options url
* Dev: yith_wcmv_displayed_{$gateway_id}_id hook to change the gateway id
* Dev: yith_wcmv_is_{$gateway->get_id()}_gateway_enabled hook for check if gateway is enabled or not
* Dev: yith_wcmv_show_pay_button_for_{$this->get_id()} hook to show/hide the PAY button in admin area
* Dev: yith_wcmv_commissions_list_table_{$this->get_id()}_button_url hook for PAY action url
* Dev: yith_wcmv_get_pay_data_args_for_{$this->get_id()} hook to add/edit the pay data args
* Dev: yith_wcmv_stripe-connect_gateways_options hook for Stripe Connect options array
* Dev yith_wcmv_stripe_connect_transfer_args hook for transfer args
* Dev: yith_wcmv_extra_info_for_stripe_connect_commission hook for stripe connect commissions args

= 2.5.9 - Released on 01st June, 2018 =

* Fix: Vendor's haven't set owner in termmeta table

= 2.5.8 - Released on 24th May, 2018 =

* New: Privacy Policy Content Support
* Update: Spanish translation

= 2.5.7 - Released on 18th May, 2018 =

* New: Support to WordPress 4.9.6RC2
* New: Support to WooCommerce 3.4.0RC1
* New: GDPR Support
* Fix: No vendor owner information after remove the termmeta from database
* Fix: Vendor new order email don't show commission details for private products

= 2.5.6 - Released on 16th May, 2018 =

* Fix: Blank character on YITH_Orders class

= 2.5.5 â€“ Released on 15th May, 2018 =

* Update: Italian language
* Fix: Suborder haven't shipping and billing address with latest plugin version

= 2.5.4 - Released on 09th May, 2018 =

* New: plugin fw version 3.0.15
* Dev: "yith_wcmv_skip_new_order_email_to_vendor" hook to skip the new order email for vendors by code

= 2.5.3 - Released on 08th May, 2018 =

* Fix: Fatal error on order status updating

= 2.5.2 - Released on 07th May, 2018 =

* New: Option for website admin to receive a copy of new order (to vendor) email
* Tweak: Font awesome icon management
* Tweak: Change link to frontend manager dashboard instead of wp-admin in new vendor account email
* Updated: Font Awesome to Version 5.0.9
* Fix: Missing margin bottom in quick contact info for vendors
* Fix: Fatal error: Call to a member function get_order_number() on boolean with YITH WooCommerce Request a Quote plugin
* Fix: Font Awesome icons don't show up in vendors list shortcode
* Fix: Save button for shipping method doesn't works in vendor dashboard
* Fix: Call undefined method get_social_fields
* Fix: Add currency arg in commission get_amount() method
* Fix: FREE Shipping doesn't works fine with product included taxes display option enabled
* Fix: Remove Import and Export button for vendors
* Fix: Add more "+" icon after add new shipping zone and/or new shipping method
* Fix: Blank Shipping tab in add/edit product page
* Fix: Missing argument 2 $child_refund_id in orders class
* Fix: Vendor don't receive commissions for subscription renew order (Required YITH WooCommerce Subscription Premium version 1.3.3 or greater)

= 2.5.1 - Released on 15th March, 2018 =

* Fix: Unable to set shipping cost with latest plugin version

= 2.5.0 - Released on 14th March, 2018 =

* Tweak: Removed all Deprecated PayPal Adaptive Payments options
* Tweak: Removed all Deprecated PayPal MassPay options
* Fix: Deprecated WP_User->id attribute in new vendor email
* Fix: Resend new order and cancelled order for vendors send double emails
* Fix: Unable to use postcode in latest Multi Vendor version
* Fix: Vendor can set shipping class in add product
* Fix: Plugin doesn't works fine if two vendor set a similar shipping zone but with different postecodes
* Fix: Sold By information style in WooCommerce mini-cart
* Dev: yith_wcmv_postcodes_description hook to change the postcodes description in shipping section for vendors

= 2.4.5 - Released on 2nd March, 2018 =

* Tweak: Remove shipping class metabox for vendors
* Fix: Post code doesn't works for vendor's shipping method
* Fix: Unable to resend order email for vendors with latest WooCommerce version
* Fix: Function wc_display_item_meta() doesn't exists in WooCommerce 2.6
* Fix: Vendor can see the Delivery Date field in shipping section but haven't the ability to use it
* Fix: Date fitler for commissions table
* Fix: Order actions style
* Dev: yith_wcmv_get_status_capability_map hook

= 2.4.4 - Released on 15th February, 2018 =

* New: Support for YITH WooCommerce Sequential Order Number Premium

= 2.4.3 - Released on 15th February, 2018 =

* Fix: Related products option doesn't works with WooCommerce 3.3
* Fix: Unable to combine filter by status and filter by date in commissions list page
* Fix: Filter style in commissions list page
* Fix: Missing day in report CSV export
* Fix: $order_date arg missing in vendor's report
* Fix: Shipping method for multiple postcodes doesn't works
* Dev: yith_wcmv_suborder_created action after vendor's suborder was created

= 2.4.2 - Released on 8th February, 2018 =

* Fix: Unable to enable plugin with PHP 5.4

= 2.4.1 - Released on 7th February, 2018 =

* New: Support for WooCommerce 3.3.1
* New: Show website url in socials area
* Fix: Vendors can't set product to draft status
* Fix: Unable to see suborders wth WooCommerce 3.3
* Fix: Unable to show featured products column
* Fix: Wrong url for social fields

= 2.4.0 Released on 30th January, 2018 =

* New: 100% Dutch translation
* Tweak: Reply to and From headers in vendor quick info email
* Tweak: Removed old code for YITH SMS Notification support
* Tweak: Become a vendor template
* Updated: All languages file
* Fix: Empty link in become a vendor page if no terms and conditions page id are set
* Fix: Incorrect review count shown on Vendor page
* Fix: Wrong text domain in quick info widget
* Fix: Plugin credited taxes to vendors only for the first product
* Fix: The plugin add double total sales for each product sell by vendor
* Fix: Vendors can't create new product attributes
* Dev: yith_wcmv_avatar_image_size hook
* Dev: yith_wcmv_terms_and_conditions_for_vendors_text hook

= 2.3.1 Released on 18th December, 2017 =

* New: Support for SenangPay Payment Gateway for WooCommerce by senangPay plugin
* Fix: Tax are credited to vendor ignoring quantity
* Fix: New user can't create a vendor account
* Fix: Unable to set two shipping zone with the same country but different postal code
* Fix: Unable to use commissions filter in commissions page WordPress 4.9
* Fix: Unable to add new product to parent order if the admin is a valid vendor
* Fix: change text-domain from woocommerce to yith-woocommerce-product-vendors
* Fix: Wrong string localizzation for vendor website field
* Dev: yith_wcmv_report_commissions_by_vendor_not_allowed_status hook
* Dev: yith_wcmv_report_commissions_by_vendor_order_date hook
* Dev: yith_wcmv_force_to_trigger_new_order_email_action hook
* Dev: yith_wcmv_commissions_list_table_col_{$column_name} action to extends commissions list table

= 2.3.0 - Released on 21st November, 2017 =

* New Support for WordPress 4.9
* New: Support for YITH WooCommerce One-click Chekout order
* New: Vendor report commissions email for 'change to xxx' bulk action
* New: yith_wcmv_vendor_name shortcodes to show the vendor name with or without link
* Updated: Languages file
* Tweak: Plugin option panel string
* Tweak: Removed old jquery-chosen style
* Twaek: Pre-fill report abuse information is the user is logged in
* Fix: Unable to assign products to vendor if the store name have coma(s)
* Fix: Refund amount show 0$ to administrator with multi venodr plugin enabled
* Fix: New user's with no roles can't access to become a vendor form in WordPress MultiSite
* Fix: Fatal error on commissions list table if, for some reason, the vendor is not valid anymore
* Fix: Database error in related products box in single product page if a vendor have only one product
* Fix: No email send to admin if a customer create a new vendor account from become a vendor page
* Fix: Wrong vendor detail url in New vendor registration email
* Fix: No owner information in New vendor registration email
* Fix: Unable to access property user_email on null in become a vendor page
* Fix: Options deps in order management

= 2.2.2 - Released on 17th October, 2017 =

* Fix: Unable to activate license
* Fix: Wrong message in old vendor order message for taxes management
* Fix: Fix wrong table name, use post instead of posts

= 2.2.1 - Released on 12nd October, 2017 =

* New: Support for WooCommerce 3.2.0-RC2
* Tweak: Add shipping fee information in new order email for vendors
* Fix: Minor bugs with WordPress 4.8.2
* Fix: No email if admin change the commission status by Bulk Action
* Fix: Can't change the "Register as a vendor" string with the correct hook
* Fix: Wrong style in new order for vendor email
* Fix: Undefined index issue if no value set for shipping zone in vendor admin panel
* Dev: yith_wcmv_send_commissions_email_on_bulk_action hook

= 2.2.0 =

* New: New tax management in commissions calculations
* New: PayPal email field in vendor registration form
* Tweak: New column 'Tax' in new order vendor email if the 100% of taxes are send to vendor
* Fix: Wrong refuind amount in parent order if a vendor make a refund from suborder
* Fix: Wrong tax amount in vendor suborder
* Fix: Unable to change vendor's commission in add/edit taxonomy screen
* Fix: No amount shown in commission view poage with no variable products
* Fix: Unable to create a vendor account with empty PayPal email, it this field isn't mandatory
* Fix: Loop on order refund with WooCommerce 3.0.x or greather
* Fix: Undefined property $meta in vendor new order email
* Dev: yith_wcmv_vendor_admin_settings_page_args hook

= 2.1.1 =

* Tweak: Prevent to have different store with the same name
* Fix: Admin can create vendor with the same shop owner

= 2.1.0 =

* New: Suborder to parent order status sync option
* Tweak: Force commission to cancelled status if the commission amoun is equal to zero
* Update: All languages pot/po/mo files
* Update: wpml-config.xml file
* Fix: Notice/Warning during suborder creation with WooCommerce 3.0 or greater
* Fix: Use the new object WC_Order_Item_Product instead of deprecated WC_Order_Item_Meta
* Fix: Warning during order refund for no_index found in $args params
* Fix: Wrong value in date() function with WC 3.0 or grether. The 2nd parameter must be string, WC_DateTime given
* Fix: Fatal error in commission detail page if the order are set to refunded status
* Fix: Vendor quick info redirect to vendor shop page instead of single product page
* Fix: Typo "net commissions" instead of "net sales" in Sales by date report
* Fix: Refund policy and Shipping policy for vendor doesn't show in single product page
* Fix: Products not set to pending review status if a vendor edit attributes or variations

= 2.0.7 =

* Update: pot/po/mo files
* Fix: Exclude autodraft products from admin pending review
* Fix: Error during registration with YITH Social Login enabled
* Dev: Add hook yith_wcmv_get_header_size for vendor gravatar and header image size

= 2.0.6 =

* Fix: wc-enhanced-select script is not required in shipping tab
* Dev: yith_wcmv_shipping_method_without_extra_cost hook

= 2.0.5 =

* Tweak: Image size information for vendor header image in vendor frontpage panel
* Tweak: shipping.min.js file
* Tweak: multi-vendor.js are included only in vendor's page, product page and registration page
* Fix: Missing select2 deps for shipping.js script
* Fix: Shipping tab style on frontend manager
* Fix: No commissions created for Variable product with WooCommerce 2.6
* Fix: No commissions created for Variable product with WooCommerce 3.1
* Fix: Recoverable fatal error with php 7.1 in shipping and vacation module options page
* Fix: Issue with YOAST SEO and WooCommerce 3.1.x
* Fix: Style issue for vendor name in checkout page with RTL website
* Fix: Style issue in vacation option panel with RTL website
* Fix: Prevent global $product not defined in report abuse template

= 2.0.4 =

* Fix: Removed error_log on shipping module
* Fix: Save vendor profile remove shipping settings

= 2.0.3 =

* New: Website admin can search for suborder id
* New: Support for YITH WooCommerce Email Templates
* Update: All languages pot/po/mo files
* Fix: No tax calculation in vendor shipping cost
* Fix: Object in email header and email footer action for commission paid
* Fix: Object in email header and email footer action for commission unpaid
* Fix: Object in email header and email footer action for new vendor registration
* Fix: Object in email header and email footer action for vendor commissions paid
* Fix: Object in email header and email footer action for vendor new account
* Fix: Suborder hasn't private meta
* Fix: Unable to search all commissions suborder
* Fix: Unable to create commissions table with some MySQL version
* Fix: Save shipping tab lost all vendor admins

= 2.0.2 =

* New: Parent order info in vendor suborder page
* Tweak: Shipping module

= 2.0.1 =

* Fix: Shipping doesn't works on variable products
* Fix: Wrong shipping calculation with no vendor products in cart
* Fix: Admin can't provide refund with plugin enabled
* Update: Plugin core framework
* Dev: yith_wcmv_single_product_commission_value_object hook


= 2.0.0 =

* New: Hide/Show reviews average ratings in vendor store page
* New: YITH Live Chat social icon
* New: Vendor Shipping Module
* Tweak: Image management
* Tweak: Failure message for quick contact info
* Fix: Website admin can't add new item to orders in backend
* Fix: Vendor can't trash a product if "Set products to pending review status after vendors edit them" option is enabled
* Fix: Istagram and Gplus icon doesn't works in vendor list shortcode
* Fix: Unable to set download permissions in parent order
* Fix: array_shift() expect parameter 1 to be array but WP_Error object given after the customer place an order
* Dev: add yith_wcmv_is_vendor_page hook
* Dev: add yith_wcmv_is_vendor_order_page hook
* Dev: add yith_wcmv_is_vendor_order_details_page hook

= 1.14.2 =

* Fix: Wrong "new vendor" notification bubble
* Fix: Unable to translate "Vendor detail" string in new vendor registration email
* Fix: Website admin can't add line item to new order in admin
* Fix: Product commissions stop to working with WooCommerce 3.0.3 or greather
* Fix: Wrong id in commissions array
* Fix: Warning: json_decode() expects parameter 1 to be string in vendor dashboard
* Fix: Unable to translate address placehoder

= 1.14.1 =

* New: Option to prevent vendor edit order custom fields
* Tweak: Update plugin core framework
* Fix: Undefined function yit_get_propr on frontend

= 1.14.0 =

* New: Option to show/hide vendor tab in single product page
* Fix: Unable to activated PayPal Adaptive Payments add-on
* Fix: Report abuse title style
* Fix: added check over wc_shipping_enabled function existance, to avoid Fatal Errors with WC 2.5.x
* Fix: Select2 doesn't show current product filter in commissions page
* Fix: Select2 doesn't show current vendor filter in commissions page
* Fix: Unable to filter by product in commissions page
* Fix: Wrong shop order count on vendor dashboard
* Fix: Removed the subscriptions reports with WooCommerce Subscription
* Fix: Vendor can't add/remove admins with WooCommerce 3.0.x
* Fix: Can't access property directly for $product->id in frontend class
* Fix: Get formatted legacy deprecated since 2.4 notice
* Fix: Don't show product variation info in vendor suborders
* Fix: Don't show product variation info in vendor emails

= 1.13.2 =

* New: Bubble notification for processing orders and pending commissions in vendor dashboard
* New: Admin can change label "VAT/SSN" in plugin options
* Update: Languages files
* Fix: warning for deprecated varation_id on wc 3.0.0
* Fix: Vendor suborder haven't set order total with WooCommerce 2.6
* Dev: removed yith_wcmv_tax_label_admin hook
* Dev: removed yith_wcmv_tax_label_frontend hook

= 1.13.1 =

* Tweak: Code refactoring
* Tweak: Remove deprecated action woocommerce_before_my_account, use the new woocommerce_account_dashboard hook
* Fix: Vendor can't edit quote in version 1.13.0
* Fix: Vendor can't see sales by date report in version 1.13.0
* Fix: Vendor can add existing content in product editor
* Fix: Vendor can't create percent coupon with WooCommerce 3.0-rc1
* Fix: Header image size doesn't works
* Fix: Vendor can't edit orders without commission
* Fix: Unable to set a different sidebar for each vendor with YITH 2.0 theme
* Dev: yith_wcmv_calculate_commission_amount hook

= 1.13.0 =

* Add: Support to WooCommerce 3.0-RC1
* Add: User switching. Admin can view the vendor dashboard
* Fix: Report sales by date show blank screen on vendor side
* Fix: Commissions by vendor report show wrong amount
* Fix: Vendor can't see their order with YITH WooCommerce Deposits and down payments plugin
* Fix: Wrong size image for vendor logo in vendor list shortcode
* Fix: Logo and header image uploads in wrong place

= 1.12.1 =

* Tweak: Removed bulk edit line from order details for vendors
* Tweak: Remove dependency My Account registration -> Auto enable Vendors
* Tweak: Vendor can't edit Cost of goods (with WC COG enabled)
* Update: po/pot files
* Fix: Vendor report "Sales By Date" show all orders instead of completed, on hold and processing
* Fix: Vendor admins can't edit orders
* Fix: Vendor can't add admins if hasn't edit_shop_orders cap
* Fix: Wrong email "Your vendor account has been approved" on new account registration without auto enable option enabled
* Dev: yith_wcmv_sales_by_date_allowed_order_status hook

= 1.12.0 =

* New: Integration with YITH Booking for WooCommerce
* New: Add option to set header image size
* New: Use custom image instead of gravatar for vendor logo
* New: Option to force to show vendor logo image
* New: Add new style for vendor store page header
* New: Option "Show parent order id instead of vendor suborder id" for new vendor order email
* New: Option "Show parent order id instead of vendor suborder id" for cancelled vendor order email
* New: Sort by vendor commissions filter
* New: Support to WooCommerce cost of goods plugin
* New: Vendor commission can be calculate include/exclude cost of goods (WooCommerce Cost of goods required)
* Tweak: image size for logo and header image
* Tweak: Spam filter in quick info widget
* Tweak: Prevent duplicated order item meta _parent__commission_included_tax and _parent__commission_included_coupon
* Tweak: Moved store link style from wp_head to wp_enqueue_scripts
* Fix: Store link custom style doesn't works on shop page
* Fix: Remove old order item meta _parent__commission_included_tax and _parent__commission_included_coupon
* Fix: Vendor lost role if the owner entry level is set to subscriber instead of customer
* Fix: Product bulk edit works only if WordPress admin dashboard language are set to english
* Fix: Unable to retreive enable selling value for vendor with WPML
* Dev: yith_wcmv_admin_order_item_headers action
* Dev: yith_wcmv_checkout_order_processed action
* Dev: yith_wcmv_get_line_total_amount_for_commission hook
* Dev: yith_wcmv_new_commission_note hook
* Dev: yith_wcmv_add_extra_commission_order_item_meta action
* Dev: yith_wcmv_add_extra_commission_order_item_meta action
* Dev: yith_wcmv_order_item_meta_no_sync hook
* Dev: yith_wcmv_order_details_page_commission_message hook
* Dev: New yith_wcmv_get_email_order_number function

= 1.11.3 =

* Fix: Unable to get enable sales and pending vendor cap

= 1.11.2 =

* New: Quick info widget now works on single product page
* New: wpml-config.xml file
* Fix: Unable to translate the "Vendor Tab" title with WPML
* Fix: Unable to set an owner for translated vendor with WPML
* Fix: Wrong message "Set an owner" in dashboard for translated vendor with WPML
* Fix: Unable to approve translated vendor with WPML
* Fix: Unable to enable/disable selling for translated vendor with WPML
* Fix: Missing registration date for translated vendor with WPML
* Dev: New function yith_wcmv_get_wpml_vendor_id to get the not translated vendor id

= 1.11.1 =

* Update: Plugin Framework
* Fix: Missed testing code

= 1.11.0 =

* New: Order message to inform website admin if the vendor commission have been calculated included or excluded tax and coupon
* New: Commission note to inform vendor if the commission have been calculated included or excluded tax and coupon
* Tweak: Updated all pot and po/mo files
* Tweak: change "Commission date" to "Date" in commission details page
* Tweak: Suborder message to inform vendor if the commission have been calculated included or excluded tax and coupon
* Tweak: PayPal email in commission detail page
* Fix: Wrong amount refunded for commissions with tax option enabled
* Fix: Wrong amount refunded for commissions with tax option disabled
* Fix: Get order currency of a non-object
* Fix: Wrong store name in suborder metabox if the vendor are deleted
* Fix: No item total in commission detail page
* Fix: No tax in vendor sub-orders
* Fix: No tax in commission details page
* Fix: Prevent error Call to a member function commissions_to_pay() on a non-object after an order are set to complete
* Fix: Wrong currency in commission details page with Aaelia
* Fix: Unable to translate some string in commission details page
* Dev: _commission_included_tax order meta
* Dev: _commission_included_coupon order meta

= 1.10.1 =

* Added: New vendor field external website url
* Added: Support to Aelia Currency Switcher for WooCommerce
* Fixed: WooCommerce dashboard widget show duplicated sales in month in WooCommerce 2.6.x
* Fixed: Unable to sort commissions by vendor and by amount
* Fixed: Unable to sort commissions by Last Edit
* Fixed: Wrong last edit date in new commission
* Fixed: Creating default object from empty value in vendor reports
* Fixed: User with Vendor and Administrator role can't access in backed if vendor haven't selling capability
* Fixed: Quick Info widget doesn't send email with WordPress 4.7
* Fixed: Warning undefined title in vendor list widget if Add it by WordPress Customize

= 1.10 =

* Added: Support to WordPress 4.7
* Fixed: Grammatical error in vendor email
* Fixed: Wrong amount on Sales By Product and Sales by Category in vendor dashboard

= 1.9.18 =

* Added: Option to prevent vendors to resend order emails
* Added: Suppot to YITH PayPal Adaptive Payments for WooCommerce
* Added: create_via order meta for vendor suborder
* Added: yith_wcmv_send_commission_email_on_manually_update to force commissions email for manual status change
* Added: yith_wcmv_become_a_vendor_button_label hook to change "Become a vendor" button label
* Added: Support to WooCommerce Points and Rewards plugin. No double points if a customer buy a vendor product
* Tweak: Commissions table creation
* Fixed: Vendor can't delete their uploaded images
* Fixed: Remove customer search from orders section in vendor dashboard
* Fixed: missing tax_id and tax_amount if a customer buy a no taxable products
* Fixed: no new order email to vendor if order sync option are disabled
* Fixed: Unable to sort commissions list table
* Fixed: Suborder lost customer information if privacy option enabled
* Fixed: Vendor quote lost customer information if privacy option enabled
* Fixed: Empty Commissions list with version 1.9.17

= 1.9.17 =

* Fixed: Vendor can see all trashed orders
* Fixed: Quick info widget dosn't show customer name and customer email

= 1.9.16 =

* Added: Body class yith_wcmv_user_is_vendor if current logged in user is a vendor
* Added: Body class yith_wcmv_user_is_vendor if current logged in user is not a vendor
* Added: yith_wcmv_product_commission_field_args hook
* Added: Option to remove the "Register as a vendor" and login form from "Become a vendor" page
* Added: Enable vendors to add admins
* Fixed: Unable to filter by attributes with pending vendor profile and YITH WooCommerce Ajax Product Filter plugin
* Fixed: Wrong processing order count in WordPress menu
* Fixed: Data range doesn't works in "Commissions by vendor" report
* Fixed: Can't translate vendor vacation module with multi lingual plugins
* Fixed: Double vacation message on variable products
* Fixed: Prevent error on activation for add_cap and WP_Role object
* Fixed: Website admin can't receive copy of quick info email
* Fixed: Order sync option doesn't work
* Fixed: Vendor order can't trigger correct action after order status changed
* Fixed: Shipping and Delivery event doesn't added in to calendar
* Fixed: Call undefined function get_current_screen() on plugin activation
* Fixed: Sales by Vendor reports doesn't exclude on-hold, cancelled and refunded orders

= 1.9.15 =

* Added: Support to YITH WooCommerce SMS Notifications
* Added: Support to YITH WooCommerce Bulk Product Editing
* Added: Resend order email for vendor in order detail page
* Fixed: Conflict between product limit and other custom post type
* Fixed: User can't add chat macro if user limit are enabled


= 1.9.14 =

* Added: New report "Commission by vendor" in WooCommerce -> Reports -> Vendors
* Fixed: Change text domain from 'yith_wc_product_vendors' to 'yith-woocommerce-product-vendors'
* Fixed: Vendor list shortcodes per_page=-1 arg doesn't works
* Fixed: No shipping address in order from RAQ
* Fixed: Vendor store header doesn't show with filtered url
* Fixed: Prevent to send SMS for vendr suborder with YITH WooCommerce SMS Notifications

= 1.9.13 =

* Added: Support to Adventure Tours theme
* Added: Set any product on which a vendor applies a change to â€œPending reviewâ€ status
* Fixed: Vendor store description with advanced editor doesn't save html tags
* Fixed: Vendor can change assign product to other vendors in bulk edit
* Fixed: Duplicated email to customer if an order are set to on-hold status
* Fixed: No shipping address in vendor email
* Fixed: Vacation icon doesn't appears on WooCommerce 2.6

= 1.9.12 =

* Added: Store description in vendor list shortcode
* Fixed: Duplicated download permissions with WooCommerce 2.6

= 1.9.11 =

* Added: Commission information to order line items
* Fixed: warning on vendor dashboard with WP User Avatar plugin
* Fixed: Unable to translate Address field placeholder
* Fixed: When you disabled/enabled the new order email, the vendor new order email will disabled too.
* Fixed: Wrong Google maps API Key in widget Vendor Store Location
* Fixed: Empty extra fields in vendor suborder with Bakery Theme
* Fixed: Missing product variations and taxes in vendor suborder after save main order

= 1.9.10 =

* Added: Support to extra order fields
* Added: Support to YITH WooCommerce Checkout Manager
* Fixed: Wrong sales report for website admin
* Fixed: Disable line item edit in vendor details
* Fixed: Stripe credit card refund issue when an order change status to complete

= 1.9.9 =

* Fixed: The message "X vendor shops have no owner set" is always shown in backend
* Fixed: Wrong action args in order's email
* Fixed: No vendor products in shop loop

= 1.9.8 =

* Added: Support to WooCommerce 2.6-beta-2
* Added: yith_wcmv_tax_label_frontend hook
* Added: yith_wcmv_tax_label_admin hook
* Added: Google maps api key support
* Added: Support to WooCommerce Customer/Order CSV Export
* Added: Support to WordPress User Frontend
* Added: Assign vendor to product with Bulk Edit
* Added: Assign vendor to product with Quick Edit
* Tweak: Support to WooCommerce 2.6 icon set
* Fixed: 404 not found error after change the slug of vendor store
* Fixed: On order complete the customer receive a duplicate email
* Fixed: Vendor with no owner abort ajax checkout in frontend
* Fixed: Wrong style in vendor list shortcodes with gravatar image
* Fixed: Wrong position of page content and "Vendor list" shortcode on frontend
* Fixed: Vendor store page VAT/SSN layout issue

= 1.9.7 =

* Updated: Language files

= 1.9.6 =

* Added: yith_wcmv_before_vendor_header e yith_wcmv_after_vendor_header hooks for vendor store page
* Added: Media gallery for vendors
* Added: Vendors to navigation menus
* Added: New option for order and orderby for vendors list shortcodes
* Added: Support to YITH WooCommerce Role Based Price Premium
* Added: Support to YITH WooCommerce Advanced Product Options Premium
* Added: Support to WP User Avatar plugin
* Added: yith_wcmv_hide_vendor_profile hook, use this to remove Vendor Details page in vendor dashboard
* Tweak: Vendor can't manage essential grid metabox in edit product
* Tweak: Widget quick info send the email to owner if no store email was set
* Fixed: Featured Products management doesn't work for vendor
* Fixed: Warning on order status not found in commissions report
* Fixed: Vacation module issue on frontend
* Fixed: Wrong product count in vendor screen
* Fixed: Wrong shop order counts
* Fixed: Class YITH_Addons doesn't exists in vendor dashboard
* Fixed: Blank "become a vendor" page for not logged in users
* Fixed: WooCommerce dashboard widget show duplicated sales in month
* Fixed: Unable to deactivated plugin in WordPress network website
* Fixed: Wrong order total for vendors (order total is without taxes)
* Removed: Essential grid metabox in add product page
* Removed: yith_wcmv_show_vendor_profile hook

= 1.9.5 =

* Added: Support to YITH WooCommerce PDF Invoce and Shipping list Premium
* Added: Support to YITH WooCommerce Request a quote Premium
* Added: Support to YITH WooCommerce Catalog Mode Premium
* Updated: All .po/.mo files
* Fixed: Translation issue in backend
* Fixed: Wrong tax calculation in vendor order
* Fixed: Admin can't enable vaction module
* Fixed: Vendor can edit reviews without capability in product details page
* Fixed: Widget quick info use owner email if no store email was set
* Fixed: Content issue in Become a Vendor page
* Fixed: Wrong total sales number with free orders
* Fixed: Wrong order total count in vendor admin
* Fixed: Featured products management doesn't work in edit product page for vendor
* Fixed: Privacy option for vendor orders doesn't hide email in order list

= 1.9.4 =

* Added: yith_vendor_not_allowed_reports hook for not allowed report for vendor
* Fixed: Vendor can't access to admin area if GeoDirectory plugin is activated
* Fixed: Report abuse link conflict with enfold theme
* Fixed: PrettyPhoto js library doesn't exists
* Fixed: Vendor Shop Owner removed after saving vendor data
* Removed: YITH WooCommerce Mailchimp and Jetpack Dashboard widgets

= 1.9.3 =

* Fixed: Vendor Shop Owner removed after saving of bank account (IBAN/BIC)
* Fixed: Spinner doesn't show in admin
* Fixed: Skip review capability doesn't work in frontend registration

= 1.9.2 =

* Fixed: Duplicate order in WooCommerce -> Reports -> Sales by date for admin
* Fixed: Unable to translate vendor registration form placeholder
* Fixed: Order actions doesn't work for vendor
* Fixed: Admin can't remove vendor owner

= 1.9.1 =

* Added: Featured products management can override for each vendor
* Fixed: Customer can't register if terms and conditions fields is set to required
* Fixed: Vendors can't save text editor style in store description field
* Fixed: Warning if not vendor owner was set

= 1.9.0 =

* Added: New socials fields (Vimeo, Instagram, Pinterest, Flickr, Behance, Tripadvisor)
* Added: Admin can change the Vendor tab name
* Added: Legal notes fields for vendor
* Added: Support to WooCommerce 2.5
* Added: Support to YITH WooCommerce Customize My Account Page Premium
* Added: Select if you want to show header image or gravatar in vendor list shortcode
* Added: IBAN/BIC fields in vendor personal information
* Added: Admin can disable payment information in order details page for vendor
* Added: Terms and conditions fields for vendor in registration and become a vendor pages
* Updated: 3rd-party FontAwesome lib
* Updated: 3rd-party PayPal lib
* Updated: Language files
* Fixed: Missing text domain in some strings in text domain
* Fixed: Duplicate order if the customer pay with external gateway (like PayPal, Stripe, Simplify, ecc.)
* Fixed: Unable to show become a vendor form in My Account endpoint
* Fixed: Admin can't set vendor owner/admins if Yoast SEO plugin is activate on website
* Fixed: Warning in WooCommerce Email page (in admin)
* Fixed: Call to undefined function get_current_screen() in admin
* Fixed: Wrong data in Sales by date report for vendor
* Fixed: Missing WooCommerce font for vacation icon
* Fixed: VAT validation issue in become a vendor page
* Tweak: Replaced old chosen script to select2
* Tweak: Become a vendor form
* Tweak: New vendor registration form
* Tweak: Add "Vendor" label for recipient in WooCommerce -> Settings -> Emails
* Moved: Vendor's VAT/SSN from "Vendor Settings" to "Front page" in Vendor dashboard
* Removed: add_select_customer_script() method from admin class
* Removed: enqueue_ajax_choosen() method from admin class
* Removed: vendor_admins_chosen() method from admin class

= 1.8.4 =

* Fixed: Product variations in order with latest WooCommerce

= 1.8.3 =

* Added: Advanced text editor for vendor description
* Fixed: Store header wrapper stylesheet error, no margin bottom
* Fixed: Vendor table column style
* Fixed: Vendor with no order can see all shop orders
* Fixed: yith_vendors not defined in vendor taxonomy page
* Fixed: User with vendor role but without store can edit products, order, coupons, ecc.
* Fixed: add to cart button disappears in Nielsen Theme with vacation module enabled

= 1.8.2 =

* Added: Hide customer section in order details page for vendor
* Added: Calculate commission include tax

= 1.8.1 =

* Fixed: Vendor lost translated product if edit by website admin
* Fixed: Support to WPML in vendor store page (frontend)
* Fixed: Can't create vendor sidebar in YITH Thmemes with WordPress 4.4
* Fixed: WooCommerce Report can't show correct information

= 1.8.0 =

* Added: Support to WordPress 4.4
* Added: Disabled vendor logo (gravatar) image in each vendor store page
* Added: Change vendor logo (gravatar) image size
* Added: Support to YITH WooCommerce Waiting List Premium (vendor can manage waiting list)
* Added: Support to YITH WooCommerce Order Tracking Premium (vendor can manage tracking code)
* Added: Support to YITH WooCommerce Membership Premium (vendor can manage membership plans)
* Added: Support to YITH WooCommerce Subscription Premium (vendor can manage subscription)
* Added: Support to YITH WooCommerce Badge Management Premium (vendor can manage product badges)
* Added: Support to YITH WooCommerce Survey Premium (vendor can manage survey)
* Added: Support to YITH WooCommerce Coupon Email System Premium (vendor can send coupon by mail)
* Added: yith_wcmv_vendor_taxonomy_args hook tyo change taxonomy rewrite rules
* Added: Change vendor store taxonomy rewrite slug option
* Added: Antispam filter for vendor registration form
* Added: Antispam filter for become a vendor form
* Tweak: Flush rewrite rules to prevent 404 not found page after plugin update in vendor store page
* Tweak: Vendor taxonomy menu management
* Fixed: Vendor can't see admin dashboard and vendor rules after plugin update
* Fixed: Undefined suborder_id when add inline item to parent order
* Fixed: Admin and Vendor can't view trashed orders
* Fixed: Issue with YITH WooCommerce Gift Card in checkout page
* Fixed: Lost products after edit vendor slug
* Fixed: New vendor without user role
* Fixed: Vendor information validation on become a vendor page
* Fixed: WPML issue vendor can edit her/his products in other languages

= 1.7.3 =

* Tweak: Performance increase use php construct instanceof instead of is_a function
* Tweak: Order management (added order version in DB)
* Fixed: Vendor can't add or upload a store image
* Fixed: Store Name and Gravatar issue
* Fixed: Can't see product variation in vendor order details
* Fixed: Website admin can't assigne products to a specific vendor

= 1.7.2 =

* Updated: Language files
* Fixed: Shop manager can't edit vendors profile
* Fixed: Customer can't register if VAT/SSN fields is set to required

= 1.7.1 =

* Added: Support to YITH Product Size Charts for WooCommerce Premium
* Added: Support to YITH WooCommerce Name Your Price Premium

= 1.7.0 =

* Added: Refund management
* Added: New user role "Vendor" (Dashboard->Users)
* Added: yit_wcmv_plugin_options_capability hook for admin panel capabilities
* Added: VAT/SSN field in vendor registration
* Added: yith_wcmv_vendor_capabilities hook
* Added: Store description in vendor page
* Updated: Languages file
* Tweak: User capabilities
* Tweak: Performance improved with new plugin core 2.0
* Fixed: Delete user capabilities after deactive or remove plugin
* Fixed: Fields "Commission id" in commission table doesn't display correctly
* Fixed: Unable to create new vendor account in front-end
* Fixed: Wrong user capabilities after delete vendor account
* Fixed: Add order link in dashboard menu
* Fixed: Issue with Date filter in Vendor sales report

= 1.6.5. =

* Updated: Italian translation
* Fixed: Product amount limit doesn't calculate correct vendor products

= 1.6.4 =

* Fixed: Vendor disabled sales after save option
* Fixed: Become a vendor page doesn't show for not logged in users

= 1.6.3 =

* Added: Become a vendor registration form
* Added: Support to YITH Live Chat Premium
* Added: Disable user gravatar in vendor's store page
* Tweak: Support to YITH Nielsen theme
* Tweak: Custom post type capabilities
* Updated: Language pot file
* Fixed: Option deps doesn't work
* Fixed: Can't translate string localized by esc_attr__ and esc_attr_e function
* Fixed: Print wrong commission rate value after insert new vendor by admin

= 1.6.2 =

* Added: Auto enable vendor account after registration
* Added: Seller vacation module
* Updated: Language pot file
* Fixed: Order email issue
* Removed: Old Product -> Vendors admin menu link

= 1.6.1 =

* Updated: Italian translation
* Updated: pot language file
* Fixed: checkout abort if no store owner set

= 1.6.0 =

* Added: Order Management
* Added: Support to YITH Live Chat
* Added: Support to WordPress 4.3
* Added: "Sold by vendor" in order details page
* Added: "Sold by vendor" in cart details page
* Added: "Sold by vendor" in checkout details page
* Added: "Sold by vendor" in My Account -> View order page
* Added: yith_wcmv_register_as_vendor_text hook for "Register as a vendor" text on frontend
* Added: yith_wcmv_store_header_class hook for vendor store header wrapper classes
* Added: yith_wcmv_header_img_class hook for vendor store header image classes
* Added: New vendor status "no-owner" in vendor taxonomy page in admin
* Added: New "Vendors" main menu item
* Added: yith_wcmv_show_vendor_name_template filter to prevent load vendor name template
* Added: YITH Essential Kit for WooCommerce #1 support
* Added: Dashboard notification for products needs to approve
* Added: New option "Send a copy to website owner" in Quick Info widget
* Updated: Italian translation
* Updated: pot language file
* Tweak: Commission rate column in commission table
* Tweak: Support to WooCommerce 2.4
* Tweak: WooCommerce option panel with the latest WC Version
* Tweak: Javascript code optimization
* Tweak: Commissions list order by descending commission ids
* Fixed: Prevent to edit other vendor reviews
* Fixed: Add new post button doesn't display
* Fixed: Unable to add Shop coupon with product amount option enabled
* Fixed: Vendor don't see shop coupon page with product amount option enabled
* Fixed: Coupon and Reviews option issue after the first installation
* Fixed: Reviews list not filter comments if vendor have no products
* Fixed: Recent comment dashboard widget in vendor administrator
* Fixed: Wrong search in Add/Edit product for Grouped product
* Fixed: Remove "Add new" post types menu from wp-admin bar
* Fixed: No default value "per_page" in yith_wcmv_list shortcodes
* Fixed: Add vendor image issue in italian language
* Fixed: Unable to translate "Edit extra info" button in admin
* Fixed: Chart GroupBy parameter doesn't exist in Vendor Reports
* Fixed: Warning on vendor reviews list in admin
* Fixed: Warning "cart item key not found" on checkout page
* Fixed: Vendors don't receive the email order
* Fixed: Auto sync commission and order status
* Fixed: Undefined index: hide_from_guests in Quick Info widget
* Fixed: Vendor description tab translation issue with qTranslateX plugin

= 1.5.2 =

* Fixed: Unable to login in vendor dashboard using particular themes

= 1.5.1 =

* Added: Support to WooCommerce 2.4
* Added: "Sold by vendor" in commission page
* Tweak: Plugin Core Framework
* Fixed: Vendor don't see product page with product amount enabled

= 1.5.0 =

* Added: New order actions: "New order" and "Cancelled order" for vendor
* Added: New order email options in WooCommerce > Settings > Emails > New order (for vendor)
* Added: Cancelled order email options in WooCommerce > Settings > Emails > New order (for vendor)
* Added: Minimum value for commission withdrawals
* Added: Featured products management option
* Added: Shortcodes for list of vendors
* Added: Item sold information in single product page
* Added: Total sales information in vendor page
* Added: yith_wcmv_header_icons_class hook to change header icons in vendor page
* Added: YITH WooCommerce Ajax Product Filter Support
* Added: Italian language file
* Added: WPML Support
* Updated: pot language file
* Fixed: Wrong order date in "Vendors Sales" report
* Fixed: Can't locate email templates
* Fixed: Prevent double instance in singleton class
* Fixed: Hide store header if vendor account is disabled
* Fixed: Variations don't show commission detail page
* Fixed: New order email notification

= 1.4.4 =

* Updated: pot language file
* Fixed: Fatal error in the commision page for deleted orders

= 1.4.3 =

* Fixed: Plugin does not recognize the languages file

= 1.4.2 =

* Fixed: Vendor can see all custom post types

= 1.4.1 =

* Added: Enable/Disable seller capabilities Bulk action
* Added: Report abuse option
* Updated: Plugin default language file
* Fixed: Quick contact info widget text area style
* Fixed: Vendors bulk action string localizzation
* Removed: Old taxonomy bulk action hook

= 1.4.0 =

* Added: Vendors can manage customer reviews on their products
* Added: Vendor can manage coupons for their products
* Added: Recent Comments dashboard widget
* Added: Recent Reviews dashboard widget
* Fixed: Store header image on Firefox and Safari
* Fixed: Wrong commission link in order page

= 1.3.0 =

* Added: Bulk Action in Vendors table
* Added: Register a new vendor from front end
* Added: yith_frontend_vendor_name_prefix hook to change the "by" prefix in loop and single product page
* Added: yith_single_product_vendor_tab_name hook to change the title of "Vendor" tab in single product page
* Added: Customize submit label in quick info widget
* Added: Option to limit the vendor product amount
* Added: Option to hide the quick info widget from guests
* Added: yith_wpv_quick_info_button_class hook for custom css classes to quick info button
* Added: Option to hide the vendor name in Shop page
* Added: Option to hide the vendor name in Single product page
* Added: Option to hide the vendor name in Product category page
* Updated: Plugin default language file
* Fixed: Store header on mobile
* Fixed: Unable to rewrite frontend css on child theme
* Fixed: Changed "Product Vendors" label  to "Vendor" in product list table
* Fixed: Wrong default title in store location and quick info widgets
* Fixed: Widget Vendor list: option "Hide this widget on vendor page" doesn't work
* Fixed: Spelling error in Quick Info widget. Change the label "Object" to "Subject"
* Removed: Old sidebar template
* Removed: Old default.po file

= 1.2.0 =

* Initial release
