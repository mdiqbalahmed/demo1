<?php

$this->Form->unlockField('gsa_id');
?>
<?php

use Cake\Core\Configure;

$main_top_bg = Configure::read('Menu.main_top_bg');
$main_bottom_bg = Configure::read('Menu.main_bottom_bg');
$main_text_color = Configure::read('Menu.main_text_color');
$main_border_color = Configure::read('Menu.main_border_color');
$submenu_top_bg = Configure::read('Menu.submenu_top_bg');
$submenu_bottom_bg = Configure::read('Menu.submenu_bottom_bg');
$submenu_text_color = Configure::read('Menu.submenu_text_color');

?>
<?php $this->assign('title', 'Admission Form'); ?>
<script src="https://cdn.tailwindcss.com"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f0f0f0;
    }

    .sidebar {

        margin: 0px;

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

    $this->layout = 'no_sidebar';

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



    <div class="">

        <div class=" text-gray-800 text-sm max-w-6xl mx-auto  font-sans >

        
        

                    <h2 class=" font-bold pt-4">নিচে ফর্ম পূরণ করে Submit Button টি চাপুন :</h2>


            <!-- Basic Information Section -->
            <div class=" bg-white border border-gray-300 p-6 mb-6 mt-6">
                <div class=" bg-[<?= $main_top_bg ?>] text-white font-bold px-3 py-2 text-sm -mt-6 -mx-6 mb-4">
                    Basic Information
                </div>
                <?php echo $this->Form->create('', ['type' => 'file']); ?>
                <input type="hidden" name="id" value="<?php echo $stu->id; ?>">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Left Side: Form Fields -->
                    <div class="space-y-4">

                        <div class="flex flex-col md:flex-row md:items-center md:gap-3">
                            <label for="name" class="font-semibold block mb-1 md:mb-0 md:w-32">Student's Name</label>
                            <input type="text" name="name" value="<?php echo $stu->name_english; ?>" class="w-full md:flex-1 border border-black rounded px-2 py-1 text-sm">
                        </div>

                        <div class="flex flex-col md:flex-row md:items-center md:gap-3">
                            <label for="name_bangla" class="font-semibold block mb-1 md:mb-0 md:w-32">Name (বাংলায়)</label>
                            <input type="text" name="name_bangla" class="w-full md:flex-1 border border-black rounded px-2 py-1 text-sm">
                        </div>

                        <div class="flex flex-col md:flex-row md:items-center md:gap-3">
                            <label for="mobile" class="font-semibold block mb-1 md:mb-0 md:w-32">Mobile No</label>
                            <input type="tel" id="mobile" name="mobile" class="w-full md:flex-1 border border-black rounded px-2 py-1 text-sm" placeholder="01XXXXXXXXX">
                        </div>
                        <div class="flex flex-col md:flex-row md:items-center md:gap-3">
                            <label for="dob" class="font-semibold block mb-1 md:mb-0 md:w-32">Date of Birth</label>
                            <input type="date" name="dob" class="w-full md:flex-1 border border-black rounded px-2 py-1 text-sm">
                        </div>
                        <div class="flex flex-col md:flex-row md:items-center md:gap-3">
                            <label for="birth_reg" class="font-semibold block mb-1 md:mb-0 md:w-32">Birth Registration</label>
                            <input type="text" name="birth_reg" class="w-full md:flex-1 border border-black rounded px-2 py-1 text-sm">
                        </div>
                        <div class="flex flex-col md:flex-row md:items-center md:gap-3">
                            <label for="religion" class="font-semibold block mb-1 md:mb-0 md:w-32">Religion</label>
                            <select type="text" name="religion" class="w-full md:flex-1 border border-black rounded px-2 py-1 text-sm">
                                <option value="">Select</option>
                                <option value="Islam">Islam</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Christian">Christian</option>
                                <option value="Buddh">Buddh</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                    </div>

                    <!-- Right Side: Upload Image -->
                    <div class="flex justify-center items-center py-4 gap-8">
                        <!-- Profile Image -->
                        <div class="w-36">
                            <img id="preview-image" src="" alt="Upload Image"
                                class="w-full h-36 object-cover border-2 border-gray-300 shadow-md rounded-md" />

                            <label for="image-upload"
                                class="mt-2 block text-center bg-[<?= $main_top_bg ?>] text-white text-sm py-2 rounded cursor-pointer hover:bg-[<?= $submenu_top_bg ?>] transition duration-200">
                                <i class="fa fa-arrow-circle-up mr-1"></i>Upload Image
                            </label>

                            <input id="image-upload" name="thumbnail" type="file" accept="image/*" class="hidden" />
                            <p class="text-xs text-gray-500 text-center mt-2">* Image size should be 300×300 pixels</p>
                        </div>
                    </div>
                </div>

                <!-- Fields in 2 Columns on Desktop with Aligned Inputs -->
                <div class="mt-6 grid grid-cols-1 md:grid-cols-2 gap-x-6 gap-y-4">
                    <div class="flex flex-col md:flex-row md:items-center md:gap-3">
                        <label for="gender" class="font-semibold block mb-1 md:mb-0 md:w-32">Gender</label>
                        <select type="text" name="gender" class="w-full md:flex-1 border border-black rounded px-2 py-1 text-sm">
                            <option value="">Select</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Others">Others</option>
                        </select>
                    </div>

                    <div class="flex flex-col md:flex-row md:items-center md:gap-3">
                        <label for="nid" class="font-semibold block mb-1 md:mb-0 md:w-32">Blood Group</label>
                        <input type="text" name="blood" class="w-full md:flex-1 border border-black rounded px-2 py-1 text-sm">
                    </div>
                    <div class="flex flex-col md:flex-row md:items-center md:gap-3">
                        <label for="nationality" class="font-semibold block mb-1 md:mb-0 md:w-32">Nationality</label>
                        <select name="nationality" class="w-full md:flex-1 border border-black rounded px-2 py-1 text-sm">
                            <option value="">Select</option>
                            <option value="Bangladeshi">Bangladeshi</option>
                        </select>
                    </div>

                    <div class="flex flex-col md:flex-row md:items-center md:gap-3">
                        <label for="gender" class="font-semibold block mb-1 md:mb-0 md:w-32">Previous School </label>
                        <input type="text" name="pre_school" class="w-full md:flex-1 border border-black rounded px-2 py-1 text-sm">
                    </div>


                </div>

            </div>


            <!-- Address Section -->
            <div class=" ">


                <div class="flex flex-col md:flex-row gap-4 mb-6">
                    <!-- Present Address -->
                    <div class="flex-1 bg-white border border-gray-300 p-4 rounded-md order-1 md:order-1">
                        <div class="bg-[<?= $main_top_bg ?>] text-white font-bold px-3 py-2 rounded-t-md text-sm -mt-6 -mx-6 mb-4">
                            Present Address
                        </div>
                        <div class="grid grid-cols-1 gap-3">
                            <div class="flex flex-col md:flex-row md:items-center md:gap-3">
                                <label for="nationality" class="font-semibold block mb-1 md:mb-0 md:w-32">Village/Flat</label>
                                <input type="text" name="present_village" class="w-full md:flex-1 border border-black rounded px-2 py-1 text-sm">
                            </div>

                            <div class="flex flex-col md:flex-row md:items-center md:gap-3">
                                <label for="zila_id" class="font-semibold block mb-1 md:mb-0 md:w-32">Present District</label>
                                <select id="zila_id" name="present_district" class="w-full md:flex-1 border border-black rounded px-2 py-1 text-sm">
                                    <option value="">Select</option>
                                    <?php foreach ($zilas as $zila) { ?>
                                        <option value="<?= htmlspecialchars($zila['name']) ?>"
                                            data-id="<?= (int)$zila['zila_id'] ?>">
                                            <?= htmlspecialchars($zila['name']) ?>
                                        </option>
                                    <?php } ?>
                                </select>
                            </div>

                            <div class="flex flex-col md:flex-row md:items-center md:gap-3">
                                <label for="upazila_id" class="font-semibold block mb-1 md:mb-0 md:w-32">Present Upazila</label>
                                <select id="upazila_id" name="present_upazila" class="w-full md:flex-1 border border-black rounded px-2 py-1 text-sm">
                                    <option value="">Select</option>
                                    <?php foreach ($upazilas as $upazila) { ?>
                                        <option value="<?= htmlspecialchars($upazila['name']) ?>"
                                            data-zila="<?= (int)$upazila['zila_id'] ?>">
                                            <?= htmlspecialchars($upazila['name']) ?>
                                        </option>
                                    <?php } ?>
                                </select>
                            </div>

                            <div class="flex flex-col md:flex-row md:items-center md:gap-3">
                                <label for="marital_status" class="font-semibold block mb-1 md:mb-0 md:w-32">Post Office</label>
                                <input type="text" name="present_post" class="w-full md:flex-1 border border-black rounded px-2 py-1 text-sm">
                            </div>

                            <div class="flex flex-col md:flex-row md:items-center md:gap-3">
                                <label for="email" class="font-semibold block mb-1 md:mb-0 md:w-32">Post Code</label>
                                <input type="text" name="present_post_code" class="w-full md:flex-1 border border-black rounded px-2 py-1 text-sm">
                            </div>
                        </div>
                    </div>



                    <!-- Permanent Address -->
                    <div class="flex-1 bg-white border border-gray-300 p-4 rounded-md order-2 md:order-2">
                        <div class="flex justify-between items-center bg-[<?= $main_top_bg ?>] text-white font-bold px-3 py-2 rounded-t-md text-sm -mt-6 -mx-6 mb-4">
                            <span>Permanent Address</span>
                            <label class="text-xs font-normal flex items-center">
                                <input type="checkbox" id="sameAddress" class="mr-1"> Same as Present Address
                            </label>
                        </div>
                        <div class="grid grid-cols-1 gap-3">
                            <div class="flex flex-col md:flex-row md:items-center md:gap-3">
                                <label for="nationality" class="font-semibold block mb-1 md:mb-0 md:w-32">Village/Flat</label>
                                <input type="text" name="permanent_village" class="w-full md:flex-1 border border-black rounded px-2 py-1 text-sm">
                            </div>

                            <div class="flex flex-col md:flex-row md:items-center md:gap-3">
                                <label for="mobile" class="font-semibold block mb-1 md:mb-0 md:w-32">Permanent District</label>
                                <select id="zila_id_2" name="permanent_district" class="w-full md:flex-1 border border-black rounded px-2 py-1 text-sm">
                                    <option value="">Select</option>
                                    <?php foreach ($zilas as $zila) { ?>
                                        <option value="<?= htmlspecialchars($zila['name']) ?>"
                                            data-id="<?= (int)$zila['zila_id'] ?>">
                                            <?= htmlspecialchars($zila['name']) ?>
                                        </option>
                                    <?php } ?>
                                </select>
                            </div>

                            <div class="flex flex-col md:flex-row md:items-center md:gap-3">
                                <label for="confirm_mobile" class="font-semibold block mb-1 md:mb-0 md:w-32">Permanent Upazila</label>
                                <select id="upazila_id_2" name="permanent_upazila" class="w-full md:flex-1 border border-black rounded px-2 py-1 text-sm">
                                    <option value="">Select</option>
                                    <?php foreach ($upazilas as $upazila) { ?>
                                        <option value="<?= htmlspecialchars($upazila['name']) ?>"
                                            data-zila="<?= (int)$upazila['zila_id'] ?>">
                                            <?= htmlspecialchars($upazila['name']) ?>
                                        </option>
                                    <?php } ?>
                                </select>
                            </div>

                            <div class="flex flex-col md:flex-row md:items-center md:gap-3">
                                <label for="marital_status" class="font-semibold block mb-1 md:mb-0 md:w-32">Post Office</label>
                                <input type="text" name="permanent_post" class="w-full md:flex-1 border border-black rounded px-2 py-1 text-sm">
                            </div>

                            <div class="flex flex-col md:flex-row md:items-center md:gap-3">
                                <label for="email" class="font-semibold block mb-1 md:mb-0 md:w-32">Post Code</label>
                                <input type="text" name="permanent_post_code" class="w-full md:flex-1 border border-black rounded px-2 py-1 text-sm">
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- SSC/Equivalent Level-->
            <div class="bg-white border border-gray-300 p-6 mb-6 ">
                <div class="bg-[<?= $main_top_bg ?>] text-white font-bold px-3 py-2  text-sm -mt-6 -mx-6 mb-4">
                    Father's Information
                </div>

                <div class="mt-6 grid grid-cols-1 md:grid-cols-2 gap-x-6 gap-y-4">
                    <div class="flex flex-col md:flex-row md:items-center md:gap-3">
                        <label for="date_of_birth" class="font-semibold block mb-1 md:mb-0 md:w-32">Name</label>
                        <input type="text" name="fname" class="w-full md:flex-1 border border-black rounded px-2 py-1 text-sm">
                    </div>

                    <div class="flex flex-col md:flex-row md:items-center md:gap-3">
                        <label for="nid" class="font-semibold block mb-1 md:mb-0 md:w-32">Name (Bangla)</label>
                        <input type="text" name="fname_bangla" class="w-full md:flex-1 border border-black rounded px-2 py-1 text-sm">
                    </div>

                    <div class="flex flex-col md:flex-row md:items-center md:gap-3">
                        <label for="gender" class="font-semibold block mb-1 md:mb-0 md:w-32">NID </label>
                        <input type="text" name="f_nid" class="w-full md:flex-1 border border-black rounded px-2 py-1 text-sm">
                    </div>

                    <div class="flex flex-col md:flex-row md:items-center md:gap-3">
                        <label for="religion" class="font-semibold block mb-1 md:mb-0 md:w-32"> Profession</label>
                        <input type="text" name="foccupation" class="w-full md:flex-1 border border-black rounded px-2 py-1 text-sm">
                    </div>
                    <div class="flex flex-col md:flex-row md:items-center md:gap-3">
                        <label for="religion" class="font-semibold block mb-1 md:mb-0 md:w-32"> Profession Type</label>
                        <select type="text" name="foccupation_type" class="w-full md:flex-1 border border-black rounded px-2 py-1 text-sm">
                            <option value="">Select</option>
                            <option value="Govt">Govt.</option>
                            <option value="Non Govt.">Non Govt.</option>
                            <option value="Others">Others</option>
                        </select>
                    </div>

                    <div class="flex flex-col md:flex-row md:items-center md:gap-3">
                        <label for="nationality" class="font-semibold block mb-1 md:mb-0 md:w-32">Yearly Income</label>
                        <input type="text" name="fincome" class="w-full md:flex-1 border border-black rounded px-2 py-1 text-sm">
                    </div>

                    <div class="flex flex-col md:flex-row md:items-center md:gap-3">
                        <label for="mobile" class="font-semibold block mb-1 md:mb-0 md:w-32">Mobile</label>
                        <input type="tel" id="mobile" name="fmobile" class="w-full md:flex-1 border border-black rounded px-2 py-1 text-sm" placeholder="01XXXXXXXXX">
                    </div>


                </div>
            </div>

            <!-- SSC/Equivalent Level-->
            <div class="bg-white border border-gray-300 p-6 mb-6 ">
                <div class="bg-[<?= $main_top_bg ?>] text-white font-bold px-3 py-2  text-sm -mt-6 -mx-6 mb-4">
                    Mother's Information
                </div>

                <div class="mt-6 grid grid-cols-1 md:grid-cols-2 gap-x-6 gap-y-4">
                    <div class="flex flex-col md:flex-row md:items-center md:gap-3">
                        <label for="date_of_birth" class="font-semibold block mb-1 md:mb-0 md:w-32">Name</label>
                        <input type="text" name="mname" class="w-full md:flex-1 border border-black rounded px-2 py-1 text-sm">
                    </div>

                    <div class="flex flex-col md:flex-row md:items-center md:gap-3">
                        <label for="nid" class="font-semibold block mb-1 md:mb-0 md:w-32">Name (Bangla)</label>
                        <input type="text" name="mname_bangla" class="w-full md:flex-1 border border-black rounded px-2 py-1 text-sm">
                    </div>

                    <div class="flex flex-col md:flex-row md:items-center md:gap-3">
                        <label for="gender" class="font-semibold block mb-1 md:mb-0 md:w-32">NID </label>
                        <input type="text" name="m_nid" class="w-full md:flex-1 border border-black rounded px-2 py-1 text-sm">
                    </div>
                    <div class="flex flex-col md:flex-row md:items-center md:gap-3">
                        <label for="religion" class="font-semibold block mb-1 md:mb-0 md:w-32"> Profession</label>
                        <input type="text" name="moccupation" class="w-full md:flex-1 border border-black rounded px-2 py-1 text-sm">
                    </div>
                    <div class="flex flex-col md:flex-row md:items-center md:gap-3">
                        <label for="religion" class="font-semibold block mb-1 md:mb-0 md:w-32"> Profession Type</label>
                        <select type="text" name="moccupation_type" class="w-full md:flex-1 border border-black rounded px-2 py-1 text-sm">
                            <option value="">Select</option>
                            <option value="Govt">Govt.</option>
                            <option value="Non Govt.">Non Govt.</option>
                            <option value="Others">Others</option>
                        </select>
                    </div>

                    <div class="flex flex-col md:flex-row md:items-center md:gap-3">
                        <label for="nationality" class="font-semibold block mb-1 md:mb-0 md:w-32">Yearly Income</label>
                        <input type="text" name="mincome" class="w-full md:flex-1 border border-black rounded px-2 py-1 text-sm">
                    </div>

                    <div class="flex flex-col md:flex-row md:items-center md:gap-3">
                        <label for="mobile" class="font-semibold block mb-1 md:mb-0 md:w-32">Mobile</label>
                        <input type="tel" id="mobile" name="mmobile" class="w-full md:flex-1 border border-black rounded px-2 py-1 text-sm" placeholder="01XXXXXXXXX">
                    </div>
                </div>
            </div>

            <!-- HSC/Equivalent Level-->
            <div class="bg-white border border-gray-300 p-6 mb-6 ">
                <div class="bg-[<?= $main_top_bg ?>] text-white font-bold px-3 py-2 text-sm -mt-6 -mx-6 mb-4">
                    PEC/JDC/JSC Examination INFO
                </div>

                <div class="mt-6 grid grid-cols-1 md:grid-cols-2 gap-x-6 gap-y-4">
                    <div class="flex flex-col md:flex-row md:items-center md:gap-3">
                        <label for="date_of_birth" class="font-semibold block mb-1 md:mb-0 md:w-32">Exam Name</label>
                        <input type="text" name="exam_name" class="w-full md:flex-1 border border-black rounded px-2 py-1 text-sm">
                    </div>

                    <div class="flex flex-col md:flex-row md:items-center md:gap-3">
                        <label for="nid" class="font-semibold block mb-1 md:mb-0 md:w-32">Board</label>
                        <input type="text" name="exam_board" class="w-full md:flex-1 border border-black rounded px-2 py-1 text-sm">
                    </div>

                    <div class="flex flex-col md:flex-row md:items-center md:gap-3">
                        <label for="gender" class="font-semibold block mb-1 md:mb-0 md:w-32"> Roll </label>
                        <input type="text" name="exam_roll" class="w-full md:flex-1 border border-black rounded px-2 py-1 text-sm">
                    </div>

                    <div class="flex flex-col md:flex-row md:items-center md:gap-3">
                        <label for="religion" class="font-semibold block mb-1 md:mb-0 md:w-32"> Registration No</label>
                        <input type="text" name="exam_reg" class="w-full md:flex-1 border border-black rounded px-2 py-1 text-sm">
                    </div>

                    <div class="flex flex-col md:flex-row md:items-center md:gap-3">
                        <label for="nationality" class="font-semibold block mb-1 md:mb-0 md:w-32">GPA </label>
                        <input type="text" name="exam_gpa" class="w-full md:flex-1 border border-black rounded px-2 py-1 text-sm">
                    </div>

                    <div class="flex flex-col md:flex-row md:items-center md:gap-3">
                        <label for="passing_year" class="font-semibold block mb-1 md:mb-0 md:w-32">Passing Year</label>
                        <select name="passing_year" id="passing_year" class="w-full md:flex-1 border border-black rounded px-2 py-1 text-sm">
                            <option value="">Select</option>
                            <?php
                            $currentYear = date("Y");
                            for ($i = 0; $i < 10; $i++) {
                                $year = $currentYear - $i;
                                echo "<option value='$year'>$year</option>";
                            }
                            ?>
                        </select>
                    </div>

                </div>
            </div>

            <!-- Graduation/Equivalent Level -->
            <div class="bg-white border border-gray-300 p-6 mb-6 ">
                <div class="bg-[<?= $main_top_bg ?>] text-white font-bold px-3 py-2 text-sm -mt-6 -mx-6 mb-4">
                    Admission INFO
                </div>

                <div class="mt-6 grid grid-cols-1 md:grid-cols-2 gap-x-6 gap-y-4">
                    <div class="flex flex-col md:flex-row md:items-center md:gap-3">
                        <label for="nid" class="font-semibold block mb-1 md:mb-0 md:w-32">Class</label>
                        <select name="level" id="level" class="w-full md:flex-1 border border-black rounded px-2 py-1 text-sm">
                            <option value="">Select</option>
                            <?php foreach ($levels as $level) { ?>
                                <option value="<?php echo $level['level_id']; ?>"><?php echo $level['level_name']; ?></option>
                            <?php } ?>
                        </select>
                    </div>

                    <div class="flex flex-col md:flex-row md:items-center md:gap-3">
                        <label for="session" class="font-semibold block mb-1 md:mb-0 md:w-32">Session</label>
                        <input type="number" name="session" id="session" value="<?= date('Y') ?>" readonly class="w-full md:flex-1 border border-black rounded px-2 py-1 text-sm bg-gray-100 cursor-not-allowed">
                    </div>


                    <div class="flex flex-col md:flex-row md:items-center md:gap-3">
                        <label for="gender" class="font-semibold block mb-1 md:mb-0 md:w-32">Shift</label>
                        <select name="shift" id="shift" class="w-full md:flex-1 border border-black rounded px-2 py-1 text-sm">
                            <option value="">Select</option>
                            <?php foreach ($shifts as $shift) { ?>
                                <option value="<?php echo $shift['shift_id']; ?>"><?php echo $shift['shift_name']; ?></option>
                            <?php } ?>
                        </select>
                    </div>

                    <div class="flex flex-col md:flex-row md:items-center md:gap-3">
                        <label for="scholarship" class="font-semibold block mb-1 md:mb-0 md:w-32"> Scholarship</label>
                        <select name="scholarship" id="scholarship" class="w-full md:flex-1 border border-black rounded px-2 py-1 text-sm">
                            <option value="">Select</option>
                            <option value="No">No</option>
                            <option value="PEC">PEC</option>
                            <option value="JSC">JSC</option>
                            <option value="JDC">JDC</option>

                        </select>
                    </div>

                    <div class="flex flex-col md:flex-row md:items-center md:gap-3">
                        <label for="quota" class="font-semibold block mb-1 md:mb-0 md:w-32">Quota</label>
                        <select name="quota" id="quota" class="w-full md:flex-1 border border-black rounded px-2 py-1 text-sm">
                            <option value="">SELECT</option>
                            <option value="general">General</option>
                            <option value="child-freedom-fighter">Child of Freedom Fighter</option>
                            <option value="grand-child-freedom-fighter">Grand Child of Freedom Fighter</option>
                            <option value="child-employee-teacher">Child of Employee or Teacher</option>
                            <option value="disable-child">Disable Child</option>
                            <option value="ministry-education">Ministry of Education</option>
                            <option value="siblings">Siblings</option>
                            <option value="govt-primary">Govt Primary</option>
                        </select>
                    </div>

                    <div class="flex flex-col md:flex-row md:items-center md:gap-3 mb-3">
                        <label for="stipend" class="font-semibold block mb-1 md:mb-0 md:w-32">Stipend</label>
                        <select id="stipendSelect" name="stipend"
                            class="w-full md:flex-1 border border-black rounded px-2 py-1 text-sm">
                            <option value="">Select</option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select>
                    </div>

                    <!-- Extra field (hidden by default) -->
                    <div id="stipendNumberField" class="flex flex-col md:flex-row md:items-center md:gap-3 hidden">
                        <label for="stipend_number" class="font-semibold block mb-1 md:mb-0 md:w-32">Stipend Number</label>
                        <input type="text" id="stipend" name="stipend_id"
                            class="w-full md:flex-1 border border-black rounded px-2 py-1 text-sm"
                            placeholder="Enter stipend number">
                    </div>
                </div>
            </div>





            <div class="flex justify-center">
                <button type="submit" id="submitBtn"
                    class=" mt-2 px-4 py-2 bg-[<?= $main_top_bg ?>] text-white rounded hover:bg-[<?= $submenu_top_bg ?>] ">
                    <?= __d('setup', 'Submit') ?>
                </button>
                <?php echo $this->Form->end(); ?>
            </div>

        </div>
    </div>


<?php  } ?>