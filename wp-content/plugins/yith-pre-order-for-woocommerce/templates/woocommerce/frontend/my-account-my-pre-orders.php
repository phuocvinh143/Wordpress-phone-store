<?php
/*
 * This file belongs to the YIT Framework.
 *
 * This source file is subject to the GNU GENERAL PUBLIC LICENSE (GPL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://www.gnu.org/licenses/gpl-3.0.txt
 */

$columns = apply_filters( 'ywpo_my_pre_orders_columns', array(
    esc_html__( 'Product', 'yith-pre-order-for-woocommerce' ),
    esc_html__( 'Order', 'yith-pre-order-for-woocommerce' ),
    esc_html__( 'Price', 'yith-pre-order-for-woocommerce' )
) );

?>
<?php if ( YITH_Pre_Order::instance()->myaccount->the_user_has_pre_orders() ) : ?>
    <table class="shop_table shop_table_responsive my_account_orders">
        <tr>
            <?php foreach ( $columns as $column ) : ?>
                <th><?php echo $column; ?></th>
            <?php endforeach; ?>
        </tr>
        <?php
        if ( $all_customer_order_ids ) {
            foreach ( $all_customer_order_ids as $order_id ) {
                $order = wc_get_order( $order_id );
                $items = $order->get_items();
                foreach ( $items as $item_id => $item ) {
	                $product = $item->get_product();
	                if ( ! $product ) {
		                continue;
	                }
	                $item_is_pre_order = ! empty( $item['ywpo_item_preorder'] ) ? $item['ywpo_item_preorder'] : '';
                    if ( apply_filters( 'ywpo_my_pre_orders_show_row', 'yes' == $item_is_pre_order, $item ) ) {
                        $is_visible        = $product->is_visible();
                        $product_permalink = $is_visible ? $product->get_permalink() : '';
                        ?>
                        <tr>
                            <td data-title="<?php esc_html_e( 'Product', 'yith-pre-order-for-woocommerce' ); ?>">
                                <a href="<?php echo $product_permalink; ?>"><?php echo $product->get_title(); ?></a>
                                <?php
                                if ( $order instanceof WC_Data ) {
	                                wc_display_item_meta( $item );
	                                wc_display_item_downloads( $item);
                                } else {
	                                $order->display_item_meta( $item );
	                                $order->display_item_downloads( $item );
                                }
                                ?>
                            </td>
                            <td data-title="<?php esc_html_e( 'Order', 'yith-pre-order-for-woocommerce' ); ?>">
                                <a href="<?php echo esc_url( $order->get_view_order_url() ); ?>"><?php
                                    echo esc_html_x( '#', 'hash before order number', 'yith-pre-order-for-woocommerce' )
                                         . $order->get_order_number(); ?></a>
                            </td>
                            <td data-title="<?php esc_html_e( 'Price', 'yith-pre-order-for-woocommerce' ); ?>">
                                <?php echo $order->get_formatted_line_subtotal( $item ); ?>
                            </td>
	                        <?php
	                        do_action( 'ywpo_my_pre_orders_extra_columns', $item );
	                        ?>
                        </tr>
                        <?php
                    }
                }
            }
        } else {
            ?>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <?php
        }
        ?>

    </table>
<?php else : ?>
    <div><?php esc_html_e( 'No Pre-Orders found.', 'yith-pre-order-for-woocommerce' ); ?></div>
<?php endif;
