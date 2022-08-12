<?php $__env->startSection('title'); ?>
    <?php echo e('Pay with '.optional($order->gateway)->name ?? ''); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

    <?php $__env->startPush('navigator'); ?>
        <!-- PAGE-NAVIGATOR -->
        <section id="page-navigator">
            <div class="container-fluid">
                <div aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo e(route('user.home')); ?>"><?php echo app('translator')->get('Home'); ?></a></li>
                        <li class="breadcrumb-item"><a href="<?php echo e(route('user.addFund')); ?>"
                                                       class="text-white"><?php echo app('translator')->get('Add Fund'); ?></a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0)"
                                                       class="cursor-inherit"><?php echo e(optional($order->gateway)->name ?? ''); ?></a>
                        </li>
                    </ol>
                </div>
            </div>
        </section>
        <!-- /PAGE-NAVIGATOR -->
    <?php $__env->stopPush(); ?>



    <section id="dashboard">
        <div class="dashboard-wrapper add-fund pb-50">
            <div class="row">
                <div class="col-md-12">
                    <div class="card secbg br-4">
                        <div class="card-body br-4">
                            <div class="row  align-items-center">
                                <div class="col-md-3">
                                    <img
                                        src="<?php echo e(getFile(config('location.gateway.path').optional($order->gateway)->image)); ?>"
                                        class="card-img-top gateway-img br-4" alt="..">

                                </div>
                                <div class="col-md-9">
                                    <h4><?php echo app('translator')->get('Please Pay'); ?> <?php echo e(getAmount($order->final_amount)); ?> <?php echo e($order->gateway_currency); ?></h4>
                                    <h4 class="mt-15 mb-15"><?php echo app('translator')->get('To Get'); ?> <?php echo e(getAmount($order->amount)); ?>  <?php echo e($basic->currency); ?></h4>

                                    <button type="button"
                                            class="btn btn-primary base-btn h-fill"
                                            id="btn-confirm"><?php echo app('translator')->get('Pay with VoguePay'); ?>
                                    </button>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php $__env->startPush('script'); ?>


        <script src="//voguepay.com/js/voguepay.js"></script>
        <script>
            let closedFunction = function () {

            }
            let  successFunction = function (transaction_id) {
                let txref = "<?php echo e($data->merchant_ref); ?>";
                window.location.href = '<?php echo e(url('payment/voguepay')); ?>/' + txref + '/' + transaction_id;
            }
            let  failedFunction = function (transaction_id) {
                window.location.href = '<?php echo e(route('failed')); ?>';
            }

            function pay(item,price){
                //Initiate voguepay inline payment
                Voguepay.init({
                    v_merchant_id: "<?php echo e($data->v_merchant_id); ?>",
                    total: price,
                    notify_url: "<?php echo e($data->notify_url); ?>",
                    cur:  "<?php echo e($data->cur); ?>",
                    merchant_ref:  "<?php echo e($data->merchant_ref); ?>",
                    memo:"<?php echo e($data->memo); ?>",
                    developer_code: '5cff7398d89d1',
                    loadText:"<?php echo e($data->custom); ?>",
                    items: [
                        {
                            name: "Item name 1",
                            description: "Description 1",
                            price: 500
                        }
                    ],
                    customer: {
                        name: 'Ronnie ',
                        address: 'Dhaka Bangladesh',
                        city: 'Dhaka',
                        state: 'Shaka',
                        zipcode: '1207',
                        email: 'ronniearea@gmail.com',
                        phone: '01825683631'
                    },
                    closed:closedFunction,
                    success:successFunction,
                    failed:failedFunction
                });
            }


            $(document).on('click', '#btn-confirm', function (e) {
                e.preventDefault();
                pay('Buy', <?php echo e($data->Buy); ?>);
            });

        </script>
    <?php $__env->stopPush(); ?>

<?php $__env->stopSection(); ?>


<?php echo $__env->make($theme.'layouts.user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\server\htdocs\codecanyon-FgzCl4ke-hyippro-a-modern-hyip-investmet-platform\project\resources\views/themes/deepblue/user/payment/voguepay.blade.php ENDPATH**/ ?>