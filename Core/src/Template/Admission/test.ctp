<?php

$this->Form->unlockField('gsa_id');
?>

<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f0f0f0;
    }

    .form-container {
        background-color: #b3b3b3;
        padding: 15px;
        width: 90%;
        margin: 24px auto;
        border-radius: 0px;
    }

    .form-label {
        font-size: 14px;
        /* color: #4d773c; */
        color: rgb(20 28 26);
        margin-bottom: 5px;
    }

    .form-label span {
        color: red;
    }

    .form-input {
        width: 80%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
        font-size: 14px;
    }

    .form-button {
        margin-top: 10px;
        background-color: #996515;
        color: white;
        border: none;
        padding: 10px 20px;
        font-size: 16px;
        border-radius: 4px;
        cursor: pointer;
    }

    .form-button:hover {
        background-color: #804a10;
    }

    .form-row {
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .input-container {
        flex-grow: 1;
        margin-right: 10px;
    }
</style>

<body>
    <?php if (!isset($stu)) {
        $this->layout = 'default'; ?>
        <div class="container">
            <div class="header">
                <p class="text-center" style="color: #2f5500; margin-right: 209px; font-size: 25px;">
                    <?= __d('students', 'নিচে ফর্ম পূরণ করে Search Button টী চাপুন :') ?>
                </p>
            </div>

            <!-- Start the CakePHP Form -->
            <?= $this->Form->create(null, ['type' => 'file', 'url' => ['action' => 'index']]) ?>

            <div class="form-container">
                <div class="form-row">
                    <div class="input-container">
                        <!-- Label for GSA User ID -->
                        <?= $this->Form->label('gsa_id', 'GSA User ID <span>*</span>', ['escape' => false, 'class' => 'form-label', 'style' => 'font-size: 14px; color: #4d773c;']) ?>
                        <!-- Input Field -->
                        <?= $this->Form->control('gsa_id', [
                            'label' => false,
                            'type' => 'text',
                            'placeholder' => 'Enter GSA User ID',
                            'class' => 'form-input',
                        ]) ?>
                    </div>
                    <!-- Search Button -->
                    <?= $this->Form->button(__('SEARCH'), [
                        'type' => 'submit',
                        'class' => 'form-button',

                    ]) ?>
                </div>
            </div>

            <!-- End the CakePHP Form -->
            <?= $this->Form->end() ?>
        </div>

    <?php   } ?>



    <?php if (isset($stu)) {
        $this->layout = 'admission-form';

        $this->Form->unlockField('id');
        $this->Form->unlockField('name');
        $this->Form->unlockField('bn_name');
        $this->Form->unlockField('bn_fname');
        $this->Form->unlockField('bn_mname');
        $this->Form->unlockField('gender');
        $this->Form->unlockField('mobile');
        $this->Form->unlockField('fname');
        $this->Form->unlockField('foccupation_type');
        $this->Form->unlockField('f_nid');
        $this->Form->unlockField('image_name');
        $this->Form->unlockField('foccupation');
        $this->Form->unlockField('fincome');
        $this->Form->unlockField('fmobile');
        $this->Form->unlockField('mname');
        $this->Form->unlockField('nid');
        $this->Form->unlockField('m_nid');
        $this->Form->unlockField('moccupation_type');
        $this->Form->unlockField('moccupation');
        $this->Form->unlockField('present_address');
        $this->Form->unlockField('mincome');
        $this->Form->unlockField('mmobile');
        $this->Form->unlockField('dob');
        $this->Form->unlockField('birth_reg');
        $this->Form->unlockField('nationality');
        $this->Form->unlockField('blood_group');
        $this->Form->unlockField('religion');

        $this->Form->unlockField('permanent_address');
        $this->Form->unlockField('current_address');
        $this->Form->unlockField('pre_school');

        //Educational Information table => "scms_qualification"
        $this->Form->unlockField('exam_name');
        $this->Form->unlockField('exam_board');
        $this->Form->unlockField('passing_year');
        $this->Form->unlockField('exam_roll');
        $this->Form->unlockField('exam_gpa');
        $this->Form->unlockField('exam_reg');
        $this->Form->unlockField('sub_4th');
        $this->Form->unlockField('sub_3rd');
        $this->Form->unlockField('group');
        $this->Form->unlockField('session');

        //Father Information table => "scms_qualification"
        $this->Form->unlockField('quota');
        $this->Form->unlockField('shift');
        // $this->Form->unlockField('roll');
        $this->Form->unlockField('level');
        $this->Form->unlockField('section');
        $this->Form->unlockField('class_roll');
        $this->Form->unlockField('thumbnail');
        $this->Form->unlockField('status');
        $this->Form->unlockField('student_status');
        $this->Form->unlockField('scholarship');
        $this->Form->unlockField('stipend');

        $this->Form->unlockField('serial');
        $this->Form->unlockField('stipend_id');
        $this->Form->unlockField('stipend_account');

    ?>
        <style>
            .form-control:focus {
                border-color: rgb(5, 90, 69);
                box-shadow: 0 0 5px rgba(76, 175, 80, 0.5);
            }

            .btn-success:hover {
                background-color: #45a049;
            }
        </style>


        <body>
            <div class="container  mt-5 mb-5">
                <div class="form-border">
                    <section class="bg-light p-4 m-auto d-flex align-items-center"
                        style="max-width: 100%; border-radius: 10px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);">
                        <div class="form_area p-4" style="background: #ffffff; border-radius: 8px; flex: 1;">
                            <div class="header text-center mb-4">
                                <h1 class="h1"
                                    style="letter-spacing: 3px; word-spacing: 5px; font-weight: bold; text-transform: capitalize; color: rgb(5, 90, 69);">
                                    <?= __d('students', 'Admission Form') ?>
                                </h1>
                            </div>
                            <?php echo $this->Form->create('', ['type' => 'file', 'style' => 'padding: 0px;']); ?>
                            <input type="hidden" name="id" value="<?php echo $stu->id; ?>">

                            <!-- Full Name -->
                            <div class="row mb-3">
                                <div class="col-lg-3 text-end">
                                    <label class="form-label"
                                        style="font-weight: 600;"><?= __d('students', 'Full Name<br>(in English)') ?></label>
                                </div>
                                <div class="col-lg-9">
                                    <input name="name" type="text" class="form-control" style="border-radius: 5px;" required
                                        value="<?php echo $stu->name_english; ?>" placeholder="Full Name" readonly>
                                </div>
                            </div>

                            <!-- Bangla Name -->
                            <div class="row mb-3">
                                <div class="col-lg-3 text-end">
                                    <label class="form-label"
                                        style="font-weight: 600;"><?= __d('students', 'Full Name<br>(in Bangla)') ?></label>
                                </div>
                                <div class="col-lg-9">
                                    <input name="bn_name" type="text" class="form-control" style="border-radius: 5px;"
                                        placeholder="Full Name (in Bangla)" required>
                                </div>
                            </div>

                            <!-- Mobile -->
                            <div class="row mb-3">
                                <div class="col-lg-3 text-end">
                                    <label class="form-label"
                                        style="font-weight: 600;"><?= __d('students', 'Mobile No.') ?></label>
                                </div>
                                <div class="col-lg-9">
                                    <input name="mobile" type="tel" class="form-control" style="border-radius: 5px;"
                                        placeholder="Mobile no" required>
                                </div>
                            </div>

                            <!-- Date of Birth -->
                            <div class="row mb-3">
                                <div class="col-lg-3 text-end">
                                    <label class="form-label"
                                        style="font-weight: 600;"><?= __d('students', 'Date of Birth') ?></label>
                                </div>
                                <div class="col-lg-9">
                                    <input name="dob" type="date" class="form-control" style="border-radius: 5px;" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-lg-3 text-end">
                                    <label class="form-label"
                                        style="font-weight: 600;"><?= __d('students', 'Birth Registration') ?></label>
                                </div>
                                <div class="col-lg-9">
                                    <input name="birth_reg" type="text" value="<?php echo $stu->birth_reg; ?>" required
                                        class="form-control" style="border-radius: 5px;">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-lg-3 text-end">
                                    <label class="form-label"
                                        style="font-weight: 600;"><?= __d('students', 'Blood Group') ?></label>
                                </div>
                                <div class="col-lg-9">
                                    <input name="blood_group" type="text" class="form-control" style="border-radius: 5px;" required>
                                </div>
                            </div>

                            <!-- Gender and Religion -->
                            <div class="row mb-3">
                                <div class="col-lg-6">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <label class="form-label"
                                                style="font-weight: 600;"><?= __d('students', 'Gender') ?></label>
                                        </div>
                                        <div class="col-lg-8">
                                            <select class="form-control" name="gender" style="border-radius: 5px;" required>
                                                <option value=""><?= __d('students', '-- Choose --') ?></option>
                                                <option value="Male"><?= __d('students', 'Male') ?></option>
                                                <option value="Female"><?= __d('students', 'Female') ?></option>
                                                <option value="Others"><?= __d('students', 'Others') ?></option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <label class="form-label"
                                                style="font-weight: 600;"><?= __d('students', 'Religion') ?></label>
                                        </div>

                                        <div class="col-lg-8">
                                            <select class="form-control" name="religion" required
                                                value="<?php echo $stu->religion; ?>">
                                                <option value="Islam" <?php if ($stu->religion == 'Islam') {
                                                                            echo 'selected';
                                                                        } ?>>
                                                    <?= __d('students', 'Islam') ?></option>
                                                <option value="Hindu" <?php if ($stu->religion == 'Hindu') {
                                                                            echo 'selected';
                                                                        } ?>>
                                                    <?= __d('students', 'Hindu') ?></option>
                                                <option value="Christian" <?php if ($stu->religion == 'Christian') {
                                                                                echo 'selected';
                                                                            } ?>>
                                                    <?= __d('students', 'Christian') ?></option>
                                                <option value="Buddhist" <?php if ($stu->religion == 'Buddhist') {
                                                                                echo 'selected';
                                                                            } ?>>
                                                    <?= __d('students', 'Buddhist') ?></option>
                                                <option value="Others" <?php if ($stu->religion == 'Others') {
                                                                            echo 'selected';
                                                                        } ?>>
                                                    <?= __d('students', 'Others') ?></option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <!-- Image Section -->
                        <div class="image_section text-center ms-4" style="flex: 0.5;">
                            <img src="/img/default-girl.png" alt="Upload Photo Example" class="img-thumbnail mb-3"
                                style="max-width: 200px;">
                            <?= $this->Form->control('photo', [
                                'type' => 'file',
                                'label' => false,
                                'required' => true,
                                'class' => 'form-control mb-2',
                                'style' => 'margin-left: 59px;padding: 0px;margin-top: -8px;'
                            ]); ?>

                            <p class="text-muted">
                                <small><?= __('Maximum Image Size - 200KB') ?><br><?= __('Format - JPG') ?></small>
                            </p>
                        </div>
                    </section>



                    <section class="bg-light p-4 m-auto"
                        style="max-width: 100%; border-radius: 10px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);">
                        <div class="form_area p-4" style="background: #ffffff; border-radius: 8px;">
                            <div class="header text-center mb-4">
                                <h1 class="h1"
                                    style="letter-spacing: 3px; word-spacing: 5px; font-weight: bold; text-transform: capitalize; color: rgb(5, 90, 69);">
                                    <?= __d('students', "Father's Information") ?>
                                </h1>
                            </div>

                            <!-- Father's Name (Bangla) -->
                            <div class="row mb-3">
                                <div class="col-lg-3 text-end">
                                    <label class="form-label"
                                        style="font-weight: 600;"><?= __d('students', "Father's Name (Bangla)") ?></label>
                                </div>
                                <div class="col-lg-9">
                                    <input name="bn_fname" type="text" class="form-control" style="border-radius: 5px;"
                                        placeholder="<?= __d('students', 'Full Name') ?>" required>
                                </div>
                            </div>

                            <!-- Father's Name (English) -->
                            <div class="row mb-3">
                                <div class="col-lg-3 text-end">
                                    <label class="form-label"
                                        style="font-weight: 600;"><?= __d('students', "Father's Name (English)") ?></label>
                                </div>
                                <div class="col-lg-9">
                                    <input name="fname" type="text" class="form-control" style="border-radius: 5px;" value="<?php echo $stu->fname; ?>" required
                                        placeholder="<?= __d('students', 'Full Name') ?>" readonly>
                                </div>
                            </div>

                            <!-- Father's Mobile and NID -->
                            <div class="row mb-3">
                                <div class="col-lg-6">
                                    <div class="row">
                                        <div class="col-lg-4 text-end">
                                            <label class="form-label"
                                                style="font-weight: 600;"><?= __d('students', "Father's Mobile") ?></label>
                                        </div>
                                        <div class="col-lg-8">
                                            <input name="fmobile" type="text" class="form-control" value="<?php echo $stu->fmobile; ?>" required
                                                style="border-radius: 5px;"
                                                placeholder="<?= __d('students', 'Mobile No.') ?>" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="row">
                                        <div class="col-lg-4 text-end">
                                            <label class="form-label"
                                                style="font-weight: 600;"><?= __d('students', "Father's NID No.") ?></label>
                                        </div>
                                        <div class="col-lg-8">
                                            <input name="f_nid" type="text" class="form-control" style="border-radius: 5px;"
                                                placeholder="<?= __d('students', 'NID No.') ?>" required>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Father's Occupation, Type, and Income -->
                            <div class="row mb-3">
                                <div class="col-lg-4">
                                    <div class="row">
                                        <div class="col-lg-6 text-end">
                                            <label class="form-label"
                                                style="font-weight: 600;"><?= __d('students', "Father's Occupation") ?></label>
                                        </div>
                                        <div class="col-lg-6">
                                            <input name="foccupation" type="text" class="form-control"
                                                style="border-radius: 5px;"
                                                placeholder="<?= __d('students', 'Occupation') ?>" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="row">
                                        <div class="col-lg-6 text-end">
                                            <label class="form-label"
                                                style="font-weight: 600;"><?= __d('students', "Father's Occupation Type") ?></label>
                                        </div>
                                        <div class="col-lg-6">
                                            <select class="form-control" name="foccupation_type" required
                                                style="border-radius: 5px;">
                                                <option value="Govt"><?= __d('students', 'Govt') ?></option>
                                                <option value="Non Govt"><?= __d('students', 'Non Govt') ?></option>
                                                <option value="Others"><?= __d('students', 'Others') ?></option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="row">
                                        <div class="col-lg-6 text-end">
                                            <label class="form-label"
                                                style="font-weight: 600;"><?= __d('students', "Father's Monthly Income") ?></label>
                                        </div>
                                        <div class="col-lg-6">
                                            <input name="fincome" type="text" class="form-control"
                                                style="border-radius: 5px;"
                                                placeholder="<?= __d('students', 'Monthly Income') ?>" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>



                    <section class="bg-light p-4 m-auto"
                        style="max-width: 100%; border-radius: 10px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);">
                        <div class="form_area p-4" style="background: #ffffff; border-radius: 8px;">
                            <div class="header text-center mb-4">
                                <h1 class="h1"
                                    style="letter-spacing: 3px; word-spacing: 5px; font-weight: bold; text-transform: capitalize; color: rgb(5, 90, 69);">
                                    <?= __d('students', "Mother's Information") ?>
                                </h1>
                            </div>

                            <!-- Father's Name (Bangla) -->
                            <div class="row mb-3">
                                <div class="col-lg-3 text-end">
                                    <label class="form-label"
                                        style="font-weight: 600;"><?= __d('students', "Mother's Name (Bangla)") ?></label>
                                </div>
                                <div class="col-lg-9">
                                    <input name="bn_mname" type="text" class="form-control" style="border-radius: 5px;"
                                        placeholder="<?= __d('students', 'Full Name') ?>" required>
                                </div>
                            </div>

                            <!-- Father's Name (English) -->
                            <div class="row mb-3">
                                <div class="col-lg-3 text-end">
                                    <label class="form-label"
                                        style="font-weight: 600;"><?= __d('students', "Mother's Name (English)") ?></label>
                                </div>
                                <div class="col-lg-9">
                                    <input name="mname" type="text" class="form-control" style="border-radius: 5px;" value="<?php echo $stu->mname; ?>" required
                                        placeholder="<?= __d('students', 'Full Name') ?>" readonly>
                                </div>
                            </div>

                            <!-- Father's Mobile and NID -->
                            <div class="row mb-3">
                                <div class="col-lg-6">
                                    <div class="row">
                                        <div class="col-lg-4 text-end">
                                            <label class="form-label"
                                                style="font-weight: 600;"><?= __d('students', "Mother's Mobile") ?></label>
                                        </div>
                                        <div class="col-lg-8">
                                            <input name="mmobile" type="text" class="form-control"
                                                style="border-radius: 5px;"
                                                placeholder="<?= __d('students', 'Mobile No.') ?>" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="row">
                                        <div class="col-lg-4 text-end">
                                            <label class="form-label"
                                                style="font-weight: 600;"><?= __d('students', "Mother's NID No.") ?></label>
                                        </div>
                                        <div class="col-lg-8">
                                            <input name="m_nid" type="text" class="form-control" style="border-radius: 5px;"
                                                placeholder="<?= __d('students', 'NID No.') ?>" required>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Father's Occupation, Type, and Income -->
                            <div class="row mb-3">
                                <div class="col-lg-4">
                                    <div class="row">
                                        <div class="col-lg-6 text-end">
                                            <label class="form-label"
                                                style="font-weight: 600;"><?= __d('students', "Mother's Occupation") ?></label>
                                        </div>
                                        <div class="col-lg-6">
                                            <input name="moccupation" type="text" class="form-control"
                                                style="border-radius: 5px;"
                                                placeholder="<?= __d('students', 'Occupation') ?>" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="row">
                                        <div class="col-lg-6 text-end">
                                            <label class="form-label"
                                                style="font-weight: 600;"><?= __d('students', "Mother's Occupation Type") ?></label>
                                        </div>
                                        <div class="col-lg-6">
                                            <select class="form-control" name="moccupation_type" required
                                                style="border-radius: 5px;">
                                                <option value="Govt"><?= __d('students', 'Govt') ?></option>
                                                <option value="Non Govt"><?= __d('students', 'Non Govt') ?></option>
                                                <option value="Others"><?= __d('students', 'Others') ?></option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="row">
                                        <div class="col-lg-6 text-end">
                                            <label class="form-label"
                                                style="font-weight: 600;"><?= __d('students', "Mother's Monthly Income") ?></label>
                                        </div>
                                        <div class="col-lg-6">
                                            <input name="mincome" type="text" class="form-control"
                                                style="border-radius: 5px;"
                                                placeholder="<?= __d('students', 'Monthly Income') ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <section class="bg-light p-4 m-auto"
                        style="max-width: 100%; border-radius: 10px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);">
                        <div class="form_area p-4" style="background: #ffffff; border-radius: 8px;">




                            <div class="row mb-3">
                                <div class="col-lg-6">
                                    <div class="border p-3">
                                        <h5 class="bg-light p-2 mb-3 text-center">
                                            <?= __d('students', 'Permanent Address') ?> <span class="text-danger">**</span>
                                        </h5>

                                        <?= $this->Form->control('permanent_village', [
                                            'label' => 'Village',
                                            'class' => 'form-control mb-2',
                                            'required' => true,

                                        ]); ?>

                                        <?= $this->Form->control('permanent_post', [
                                            'label' => 'Post',
                                            'class' => 'form-control mb-2',
                                            'required' => true,

                                        ]); ?>

                                        <?= $this->Form->control('permanent_thana', [
                                            'label' => 'Thana',
                                            'class' => 'form-control mb-2',
                                            'required' => true,

                                        ]); ?>

                                        <?= $this->Form->control('permanent_district', [
                                            'label' => 'District',
                                            'class' => 'form-control mb-2',
                                            'required' => true,

                                        ]); ?>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="border p-3">
                                        <h5 class="bg-light p-2 mb-3 text-center">
                                            <?= __d('students', 'Present Address') ?> <span class="text-danger">**</span>
                                        </h5>

                                        <div class="form-check mb-2">
                                            <?= $this->Form->checkbox('same_as_permanent', [
                                                'label' => 'Same as Permanent Address',
                                                'class' => 'form-check-input',
                                                'id' => 'same-as-permanent'
                                            ]); ?>
                                            <label class="form-check-label" for="same-as-permanent">Same as Permanent
                                                Address</label>
                                        </div>

                                        <?= $this->Form->control('present_village', [
                                            'label' => 'Village',
                                            'class' => 'form-control mb-2',
                                            'required' => true,

                                        ]); ?>

                                        <?= $this->Form->control('present_post', [
                                            'label' => 'Post',
                                            'class' => 'form-control mb-2',
                                            'required' => true,

                                        ]); ?>

                                        <?= $this->Form->control('present_thana', [
                                            'label' => 'Thana',
                                            'class' => 'form-control mb-2',
                                            'required' => true,

                                        ]); ?>

                                        <?= $this->Form->control('present_district', [
                                            'label' => 'District',
                                            'class' => 'form-control mb-2',
                                            'required' => true,

                                        ]); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-lg-3 text-end">
                                    <label class="form-label"
                                        style="font-weight: 600;"><?= __d('students', "Previous School") ?></label>
                                </div>
                                <div class="col-lg-9">
                                    <input name="pre_school" type="text" class="form-control" style="border-radius: 5px;"
                                        placeholder="<?= __d('students', 'Enter Previous School Name') ?>" required>
                                </div>
                            </div>

                        </div>

                    </section>





                    <section class="bg-light p-4 m-auto"
                        style="max-width: 100%; border-radius: 10px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);">
                        <div class="form_area p-4" style="background: #ffffff; border-radius: 8px;">
                            <div class="header text-center mb-4">
                                <h1 class="h1"
                                    style="letter-spacing: 3px; word-spacing: 5px; font-weight: bold; text-transform: capitalize; color: rgb(5, 90, 69);">
                                    <?= __d('students', "Admission Information") ?>
                                </h1>
                            </div>
                            <div class="form_area px-3 py-4">
                                <div class="row mb-4">
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label class="font-weight-bold ">
                                                <?= __d('students', 'Session') ?>
                                            </label>
                                            <input name="session" type="text" class="form-control rounded-pill" value="2025"
                                                readonly>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label class="font-weight-bold ">
                                                <?= __d('students', 'Shift') ?>
                                            </label>
                                            <input name="shift" type="text" class="form-control rounded-pill"
                                                value="<?php echo $stu->shift; ?>" readonly>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label class="font-weight-bold ">
                                                <?= __d('students', 'Class') ?>
                                            </label>
                                            <input name="level" type="text" class="form-control rounded-pill"
                                                value="<?php echo $stu->level; ?>" readonly>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-4">
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label class="font-weight-bold ">
                                                <?= __d('students', 'Quota') ?>
                                            </label>
                                            <!--<input name="quota" type="text" class="form-control rounded-pill"-->
                                            <!--    value="<?php echo $stu->quota; ?>">-->
                                        </div>
                                        <div class="col-lg-6">
                                            <select class="form-control" name="quota" required
                                                style="border-radius: 5px;">
                                                <option value="General"><?= __d('students', 'General') ?></option>
                                                <option value="Child of Freedom Fighter"><?= __d('students', 'Child of Freedom Fighter') ?></option>
                                                <option value="Grand Child of Freedom Fighter"><?= __d('students', 'Grand Child of Freedom Fighter') ?></option>
                                                <option value="Child of Employee of Govt. High School"><?= __d('students', 'Child of Employee of Govt. High School') ?></option>
                                                <option value="Disabled Child"><?= __d('students', 'Disabled Child') ?></option>
                                                <option value="GOV"><?= __d('students', 'GOV') ?></option>
                                                <option value="Sibling"><?= __d('students', 'Sibling') ?></option>
                                                <option value="Ministry of Education"><?= __d('students', 'Ministry of Education') ?></option>
                                                <option value="Teacher & Staff"><?= __d('students', 'Teacher & Staff') ?></option>
                                                <option value="Twins"><?= __d('students', 'Twins') ?></option>
                                            </select>
                                        </div>
                                    </div>
                                    <!--'General','Child of Freedom Fighter','Grand Child of Freedom Fighter','Child of Employee of Govt. High School','Disabled Child','GOV','Sibling','Ministry of Education','Teacher & Staff','Twins'-->
                                    <!--<div class="col-lg-4">-->
                                    <!--    <div class="form-group">-->
                                    <!--        <label class="font-weight-bold ">-->
                                    <!--            <?= __d('students', 'Roll') ?>-->
                                    <!--        </label>-->
                                    <!--        <input name="roll" type="text" class="form-control rounded-pill"-->
                                    <!--            value="<?php echo $stu->roll; ?>" disabled>-->
                                    <!--    </div>-->
                                    <!--</div>-->
                                    <!--<div class="col-lg-4">-->
                                    <!--    <div class="form-group">-->
                                    <!--        <label class="font-weight-bold ">-->
                                    <!--            <?= __d('students', 'Status') ?>-->
                                    <!--        </label>-->
                                    <!--        <select name="status" class="form-control rounded-pill">-->
                                    <!--            <option><?= __d('students', '-- Choose --') ?></option>-->
                                    <!--            <option value="1"><?= __d('students', 'Active') ?></option>-->
                                    <!--            <option value="0"><?= __d('students', 'In-Active') ?></option>-->
                                    <!--        </select>-->
                                    <!--    </div>-->
                                    <!--</div>-->
                                </div>
                            </div>
                        </div>
                        </fieldset>
                    </section>
                    <div class="text-center mt-5">
                        <button type="submit" class="btn btn-info rounded-pill px-5">
                            <?= __d('setup', 'Submit') ?>
                        </button>
                        <?php echo $this->Form->end(); ?>
                    </div>

                </div>
            </div>
        </body>

    <?php  } ?>

    <script>
        document.getElementById('same-as-permanent').addEventListener('change', function() {
            if (this.checked) {
                document.getElementById('present-village').value = document.getElementById('permanent-village')
                    .value;
                document.getElementById('present-post').value = document.getElementById('permanent-post').value;
                document.getElementById('present-thana').value = document.getElementById('permanent-thana').value;
                document.getElementById('present-district').value = document.getElementById('permanent-district')
                    .value;
            } else {
                document.getElementById('present-village').value = '';
                document.getElementById('present-post').value = '';
                document.getElementById('present-thana').value = '';
                document.getElementById('present-district').value = '';
            }
        });

        // Get all the required fields
        const requiredFields = document.querySelectorAll('input[required], select[required]');

        requiredFields.forEach(field => {
            const row = field.closest('.row');
            if (row) {
                const label = row.querySelector('.form-label, .label-font13, .form-group'); // Find the label in the row
                if (label && !label.querySelector('.required')) { // Avoid adding the asterisk multiple times
                    const asterisk = document.createElement('span');
                    asterisk.className = 'required';
                    asterisk.innerHTML = '*';
                    asterisk.style.color = 'red';
                    asterisk.style.marginRight = '2px';
                    label.prepend(asterisk); // Add the asterisk at the beginning of the label
                }
            }
        });
    </script>





</body>