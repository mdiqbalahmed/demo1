<?php
$this->layout = 'admission-form';
?>
<style>
    @page {
        size: A4;
        margin: 20mm;
    }

    body {
        font-family: Arial, sans-serif;
        background-color: #f9f9f9;
        margin: 0;
        padding: 0;
    }

    .form-container {
        border: 10px solid #c0c32c85;
        width: 100%;
        max-width: 800px;
        background-color: #eee;
        margin: 50px auto;
        background: #aaaaaa00;
        border-radius: 11px;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 5px;
    }

    table td {
        font-weight: 600;
        font-size: 17px;
        padding: 5px;
        border: 1px solid #000;
        text-align: left;
        width: 30%;
    }

    table td:first-child,
    table td:nth-child(3) {
        text-align: left;
        background-color: #17a2b821;
        font-weight: bold;
        width: 150px;
    }


    div {
        font-weight: 600;
        font-size: 20px;
        text-align: center;
        /* margin-top: 40px; */
        color: #0d0d0e;
    }

    .header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 19px;
    }

    .header img {
        width: 70px;
    }

    .logo {
        flex: 1;
        text-align: left;
        /* margin-left: 312px; */
    }

    .info {
        flex: 2;
        text-align: center;
        color: #178920;
        font-weight: 900;
        font-size: 23px;
        /* font-family: monospace; */
        font-family: 'Abril Fatface', serif;
    }

    .info h1 {
        margin: 0;
        font-size: 24px;
    }

    .info div {
        margin-top: 5px;
    }

    .student-photo {
        flex: 1;
        text-align: right;
    }

    .student-photo img {
        /* margin-right: 306px; */
        width: 80px;
        height: 80px;
        border: 1px solid #ccc;
        object-fit: cover;
    }

    .mainWtrMark {
        position: absolute;
        top: 55%;
        left: 50%;
        transform: translate(-50%, -50%);
        max-width: 75%;
        opacity: 4.4;
    }

    .branding {
        position: relative;
        /* margin-bottom: 5px; */
        /* margin-top: -49px; */
        bottom: 1008px;
        top: 792px;
        transform: rotate(-90deg);
        rotate: 90;
        /* margin-right: -787px; */
        font-size: 21px;
        color: #9f101091;
        /* text-align: left; */
    }
</style>



<div class="form-container">
    <!-- <div class="branding" style="margin-left: -793px;">
        <p>Powered by <strong>Tech Plexus Ltd</strong></p>
    </div> -->
    <div class="ExbtnWrap" style="left: 1090px; margin-top: 33px;">
        <a class="btn btn-warning account" href="javascript:window.print();">প্রিন্ট করুন</a>
    </div>
    <div class="header">
        <?php

        use Cake\Core\Configure;

        $siteName = Configure::read('Site.institute');
        $watermarkLogo = Configure::read('Recipt.waterMark');
        // $logoPath = '/demo/webroot/uploads/footer-1.png';
        $logoPath = 'https://demo.dgghs.edu.bd/uploads/logo1.png?1733722333';

        ?>
        <div class="logo">
            <img src="<?= $logoPath; ?>" alt="School Logo" style="width: 142px; height: 132px;">
        </div>
        <div class="info">
            <p><?= $siteName ?></p>
            <span style="color: black;">Serial No:<?= $students['serial'] ?></span>

        </div>
        <div class="student-photo">
            <?= $this->Html->image(
                '/webroot/uploads/students/thumbnail/' . $students['thumbnail'],
                ['alt' => 'Student Photo', 'style' => 'width: 142px; height: 132px;']
            ); ?>
        </div>
    </div>
    <table>
        <tbody>
            <tr>
                <td>GSA User ID</td>
                <td><?= $students['gsa_id'] ?></td>
                <td>Session</td>
                <td><?= $students['session'] ?></td>
            </tr>
            <tr>
                <td>Shift</td>
                <td><?= $students['shift'] ?></td>
                <td>Class</td>
                <td><?= $students['level'] ?></td>
            </tr>
            <tr>
                <td>Student's ID</td>
                <td>&nbsp;</td>
                <td>Section</td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td>Class Roll No</td>
                <td>&nbsp;</td>
                <td>Status</td>
                <td>Regular</td>
            </tr>
            <tr>
                <td>Student's Name</td>
                <td colspan="3" style="text-align: left;">&nbsp;&nbsp;&nbsp; <?= $students['name_english'] ?></td>
            </tr>
            <tr>
                <td>Date of Birth</td>
                <td><?= $students['date_of_birth'] ?></td>
                <td>Birth Reg No</td>
                <td><?= $students['birth_reg'] ?></td>
            </tr>
            <tr>
                <td>Religion</td>
                <td><?= $students['religion'] ?></td>
                <td>Gender</td>
                <td><?= $students['gender'] ?></td>
            </tr>
            <tr>
                <td>Blood Group</td>
                <td><?= $students['blood_group'] ?></td>
                <td>Group</td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td>3rd Subject</td>
                <td>&nbsp;</td>
                <td>4th Subject</td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td>Guardian's Number</td>
                <td><?= $students['fmobile'] ?></td>
                <td>Quota</td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td>Previous School</td>
                <td colspan="3">&nbsp;&nbsp;&nbsp;<?= $students['pre_school'] ?></td>
            </tr>
            <tr>
                <td>Present Address</td>
                <td colspan="3">&nbsp;&nbsp;&nbsp;<?= $students['present_address'] ?></td>
            </tr>
            <tr>
                <td>Permanent Address</td>
                <td colspan="3">&nbsp;&nbsp;&nbsp;<?= $students['permanent_address'] ?></td>
            </tr>
        </tbody>
    </table>

    <div>Father's Information</div>

    <table>
        <tbody>
            <tr>
                <td>Father's Name</td>
                <td colspan="3">&nbsp;&nbsp;&nbsp;<?= $students['fname'] ?></td>
            </tr>
            <tr>
                <td>NID No</td>
                <td><?= $students['f_nid'] ?></td>
                <td>Profession</td>
                <td><?= $students['foccupation'] ?></td>
            </tr>
            <tr>
                <td>Monthly Income</td>
                <td><?= $students['fincome'] ?></td>
                <td>Profession Type</td>
                <td><?= $students['foccupation_type'] ?></td>
            </tr>
        </tbody>
    </table>

    <div>Mother's Information</div>

    <table>
        <tbody>
            <tr>
                <td>Mother's Name</td>
                <td colspan="3">&nbsp;&nbsp;&nbsp;<?= $students['mname'] ?></td>
            </tr>
            <tr>
                <td>NID No</td>
                <td><?= $students['m_nid'] ?></td>
                <td>Profession</td>
                <td><?= $students['moccupation'] ?></td>
            </tr>
            <tr>
                <td>Monthly Income</td>
                <td><?= $students['mincome'] ?></td>
                <td>Profession Type</td>
                <td><?= $students['moccupation_type'] ?></td>
            </tr>
        </tbody>
    </table>

    
    <div style="font-size: 13px;
    opacity: .6;
    color: #3f6166;
    margin-left: 459px;
    margin-left: 459px;">
        <p>Powered by <strong>Tech Plexus Ltd</strong></p>
    </div>
</div>