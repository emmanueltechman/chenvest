<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->get('Basic Controls'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

    <div class="card card-primary m-0 m-md-4 my-4 m-md-0 shadow">
        <div class="card-body">

            <form method="post" action="" class="needs-validation base-form">
                <?php echo csrf_field(); ?>
                <div class="row">
                    <div class="form-group col-md-3">
                        <label class="font-weight-bold"><?php echo app('translator')->get('Site Title'); ?></label>
                        <input type="text" name="site_title"
                               value="<?php echo e(old('site_title') ?? $control->site_title ?? 'Site Title'); ?>"
                               class="form-control ">

                        <?php $__errorArgs = ['site_title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="text-danger"><?php echo e($message); ?></span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                    </div>
                    <div class="form-group col-md-3">
                        <label class="font-weight-bold"><?php echo app('translator')->get('Base Color'); ?></label>
                        <input type="color" name="base_color"
                               value="<?php echo e(old('base_color') ?? "#".$control->base_color ?? '#6777ef'); ?>"
                               required="required" class="form-control ">
                        <?php $__errorArgs = ['base_color'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="text-danger"><?php echo e($message); ?></span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>


                    <div class="form-group col-md-3">
                        <label class="font-weight-bold"><?php echo app('translator')->get('TimeZone'); ?></label>
                        <select class="form-control" id="exampleFormControlSelect1" name="time_zone">
                            <option hidden><?php echo e(old('time_zone', $control->time_zone)?? 'Select Time Zone'); ?></option>
                            <?php $__currentLoopData = $control->time_zone_all; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $time_zone_local): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($time_zone_local); ?>"><?php echo app('translator')->get($time_zone_local); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>

                        <?php $__errorArgs = ['time_zone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="text-danger"><?php echo e($message); ?></span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>


                    <div class="form-group col-sm-3 col-12">
                        <label class="font-weight-bold"><?php echo app('translator')->get('Base Currency'); ?></label>
                        <input type="text" name="currency" value="<?php echo e(old('currency') ?? $control->currency ?? 'USD'); ?>"
                               required="required" class="form-control ">

                        <?php $__errorArgs = ['currency'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="text-danger"><?php echo e($message); ?></span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    <div class="form-group col-sm-3 col-12">
                        <label class="font-weight-bold"><?php echo app('translator')->get('Currency Symbol'); ?></label>
                        <input type="text" name="currency_symbol"
                               value="<?php echo e(old('currency_symbol') ?? $control->currency_symbol ?? '$'); ?>"
                               required="required" class="form-control ">

                        <?php $__errorArgs = ['currency_symbol'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="text-danger"><?php echo e($message); ?></span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    <div class="form-group col-sm-3 col-12">
                        <label class="font-weight-bold"><?php echo app('translator')->get('Fraction number'); ?></label>
                        <input type="text" name="fraction_number"
                               value="<?php echo e(old('fraction_number') ?? $control->fraction_number ?? '2'); ?>"
                               required="required" class="form-control ">
                        <?php $__errorArgs = ['fraction_number'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="text-danger"><?php echo e($message); ?></span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="form-group col-sm-3 col-12">
                        <label class="font-weight-bold"><?php echo app('translator')->get('Paginate Per Page'); ?></label>
                        <input type="text" name="paginate" value="<?php echo e(old('paginate') ?? $control->paginate ?? '2'); ?>"
                               required="required" class="form-control ">
                        <?php $__errorArgs = ['paginate'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="text-danger"><?php echo e($message); ?></span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    <div class="form-group col-sm-3 col-12">
                        <label class="font-weight-bold"><?php echo app('translator')->get('Minimum Transfer'); ?></label>
                        <input type="text" name="min_transfer" value="<?php echo e(old('min_transfer') ?? $control->min_transfer ?? '1'); ?>"
                               required="required" class="form-control ">
                        <?php $__errorArgs = ['min_transfer'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="text-danger"><?php echo e($message); ?></span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    <div class="form-group col-sm-3 col-12">
                        <label class="font-weight-bold"><?php echo app('translator')->get('Maximum Transfer'); ?></label>
                        <input type="text" name="max_transfer" value="<?php echo e(old('max_transfer') ?? $control->max_transfer ?? '1000'); ?>"
                               required="required" class="form-control ">
                        <?php $__errorArgs = ['max_transfer'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="text-danger"><?php echo e($message); ?></span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    <div class="form-group col-sm-3 col-12">
                        <label class="font-weight-bold"><?php echo app('translator')->get('Transfer Charge'); ?></label>
                        <div class="input-group mb-3">
                        <input type="text" name="transfer_charge" value="<?php echo e(old('transfer_charge') ?? $control->transfer_charge ?? '1'); ?>"
                               required="required" class="form-control ">

                            <div class="input-group-append">
                                <span class="input-group-text" >%</span>
                            </div>
                        </div>
                        <?php $__errorArgs = ['transfer_charge'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="text-danger"><?php echo e($message); ?></span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>



                    <div class="form-group col-sm-3 ">
                        <label class="font-weight-bold"><?php echo app('translator')->get('Investment Commission'); ?></label>
                        <div class="custom-switch-btn">
                            <input type='hidden' value='1' name='investment_commission'>
                            <input type="checkbox" name="investment_commission" class="custom-switch-checkbox"
                                   id="investment_commission"
                                   value="0" <?php if ($control->investment_commission == 0):echo 'checked'; endif ?> >
                            <label class="custom-switch-checkbox-label" for="investment_commission">
                                <span class="custom-switch-checkbox-inner"></span>
                                <span class="custom-switch-checkbox-switch"></span>
                            </label>
                        </div>
                    </div>





                    <div class="form-group col-sm-3 ">
                        <label class="font-weight-bold"><?php echo app('translator')->get('Deposit Commission'); ?></label>
                        <div class="custom-switch-btn">
                            <input type='hidden' value='1' name='deposit_commission'>
                            <input type="checkbox" name="deposit_commission" class="custom-switch-checkbox"
                                   id="deposit_commission"
                                   value="0" <?php if ($control->deposit_commission == 0):echo 'checked'; endif ?> >
                            <label class="custom-switch-checkbox-label" for="deposit_commission">
                                <span class="custom-switch-checkbox-inner"></span>
                                <span class="custom-switch-checkbox-switch"></span>
                            </label>
                        </div>
                    </div>


                    <div class="form-group col-sm-3 ">
                        <label class="font-weight-bold"><?php echo app('translator')->get('SMS Notification'); ?></label>
                        <div class="custom-switch-btn">
                            <input type='hidden' value='1' name='sms_notification'>
                            <input type="checkbox" name="sms_notification" class="custom-switch-checkbox"
                                   id="sms_notification"
                                   value="0" <?php if ($control->sms_notification == 0):echo 'checked'; endif ?> >
                            <label class="custom-switch-checkbox-label" for="sms_notification">
                                <span class="custom-switch-checkbox-inner"></span>
                                <span class="custom-switch-checkbox-switch"></span>
                            </label>
                        </div>
                    </div>

                    <div class="form-group col-lg-3 col-md-6">
                        <label class="d-block"><?php echo app('translator')->get('Email Notification'); ?></label>

                        <div class="custom-switch-btn">
                            <input type='hidden' value='1' name='email_notification'>
                            <input type="checkbox" name="email_notification" class="custom-switch-checkbox"
                                   id="email_notification"
                                   value="0" <?php if ($control->email_notification == 0):echo 'checked'; endif ?> >
                            <label class="custom-switch-checkbox-label" for="email_notification">
                                <span class="custom-switch-checkbox-inner"></span>
                                <span class="custom-switch-checkbox-switch"></span>
                            </label>
                        </div>
                    </div>
                    <div class="form-group col-lg-3 col-md-6">
                        <label class="d-block"><?php echo app('translator')->get('SMS Verification'); ?></label>
                        <div class="custom-switch-btn">
                            <input type='hidden' value='1' name='sms_verification'>
                            <input type="checkbox" name="sms_verification" class="custom-switch-checkbox"
                                   id="sms_verification"
                                   value="0" <?php if ($control->sms_verification == 0):echo 'checked'; endif ?> >
                            <label class="custom-switch-checkbox-label" for="sms_verification">
                                <span class="custom-switch-checkbox-inner"></span>
                                <span class="custom-switch-checkbox-switch"></span>
                            </label>
                        </div>
                    </div>
                    <div class="form-group col-lg-3 col-md-6">
                        <label class="d-block"><?php echo app('translator')->get('Email Verification'); ?></label>
                        <div class="custom-switch-btn">
                            <input type='hidden' value='1' name='email_verification'>
                            <input type="checkbox" name="email_verification" class="custom-switch-checkbox"
                                   id="email_verification"
                                   value="0" <?php if ($control->email_verification == 0):echo 'checked'; endif ?> >
                            <label class="custom-switch-checkbox-label" for="email_verification">
                                <span class="custom-switch-checkbox-inner"></span>
                                <span class="custom-switch-checkbox-switch"></span>
                            </label>
                        </div>
                    </div>

                </div>


                <button type="submit" class="btn waves-effect waves-light btn-rounded btn-primary btn-block mt-3"><span><i
                            class="fas fa-save pr-2"></i> <?php echo app('translator')->get('Save Changes'); ?></span></button>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('js'); ?>
    <script>
        "use strict";
        $(document).ready(function () {
            $('select').select2({
                selectOnClose: true
            });
        });
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\server\htdocs\codecanyon-FgzCl4ke-hyippro-a-modern-hyip-investmet-platform\project\resources\views/admin/basic-controls.blade.php ENDPATH**/ ?>