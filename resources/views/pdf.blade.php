<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet"
        href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/PROJECT/user/bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <style>
    p.card_info {
        font-size: 18px;
        font-weight: bold;
    }

    p.card_info span {
        font-weight: normal;
    }

    a.btn.dy_btn {
        position: absolute;
        right: 10px;
        top: 10px;
    }

    td {
        text-transform: capitalize;
    }

    @media only screen and (min-width: 768px) {
        .mobil_redesing {
            display: none;
        }

    }

    @media only screen and (max-width: 767px) {
        .display_deisgn {
            display: none;
        }

        .mobil_redesing {
            display: block;
        }
    }
    </style>


























</head>

<body class="profile_main">





    <!-- <div class="pdf_main_wrap">
        <div class="top_header">
            <img src="{{'data:image/png;base64,'.base64_encode(file_get_contents(public_path('logo/'.'CGHS.png')))}}"
                alt="" width="120">
            <div class="top_tx_head">
                <h3 class="top_title">CHAKARIA GOVT HIGH SCHOOL</h3>
                EIIN No: 106169, Established: 1930, <br> Address: Chakaria-4741, Coxs Bazar, Chattogram.
                <br>
                <h3 class="hed_last">CGHS Alumni Association - 2024</h3>
            </div>

        </div>
        <div class="pdf_Reg_info">
            <h3>Registration Letter</h3>
            <div class="reg_tbl_info">
                <table class="reg_table">
                    <tbody>
                        <tr>
                            <th>Program Date</th>
                            <td>13th April 2024(9am - 6pm)</td>
                        </tr>

                        <tr>
                            <th>Program Vanue</th>
                            <td>CHAKARIA GOVT HIGH SCHOOL</td>
                        </tr>
                        <tr>
                            <th>Regestration Id</th>
                            <td>{{$graduatedData->reg_id}}</td>
                        </tr>
                        <tr>
                            <th>Registered</th>
                            <td>{{$graduatedData->date}}</td>
                        </tr>
                        <tr>
                            <th> Name</th>
                            <td>{{$graduatedData->graduated_name}}</td>
                        </tr>

                        <tr>
                            <th>Batch</th>
                            <td>{{$graduatedData->batch}}</td>
                        </tr>
                        <tr>
                            <th>Mobile Number</th>
                            <td>{{$graduatedData->mobile_number}}</td>
                        </tr>

                        <tr>
                            <th>Family Member</th>
                            <td>{{$graduatedData->guest}} *(T-shirt Not Included)</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="reg_ings_section">
                <div class="bar_cd">
                    {!! DNS1D::getBarcodeHTML("$graduatedData->id", 'C128')!!}
                    <p>Regestration Barcode</p>
                </div><br>
                <img src="{{asset($graduatedData->img)}}" width='100%' height='200px' alt='image'
                    class=" border rounded" /> 

                <p>Picture</p>
            </div>

        </div>
        <div class="graduatred_info">
            <table class="table_btm">
                <tbody>

                    <tr>
                        <th>Address</th>
                        <td>{{$graduatedData->address}}</td>
                    </tr>
                    <tr>
                        <th>Profession</th>
                        <td>{{$graduatedData->profession}}</td>
                    </tr>
                    <tr>
                        <th>Profession Institute</th>
                        <td>{{$graduatedData->profession_institute}}</td>
                    </tr>
                    <tr>
                        <th>Designation</th>
                        <td>{{$graduatedData->designation}}</td>
                    </tr>
                    <tr>
                        <th>Persent Address</th>
                        <td>Dhaka, Uttara</td>
                    </tr>
                    <tr>
                        <th>T-Shirt Size</th>
                        <td>{{$graduatedData->t_shirt}}</td>
                    </tr>
                    <tr>
                        <th>Blood Group</th>
                        <td>{{$graduatedData->blood_group}}</td>
                    </tr>
                    <tr>
                        <th>Payment Number</th>
                        <td>{{$graduatedData->bkash}}</td>
                    </tr>
                    <tr>
                        <th>Transaction Id</th>
                        <td>{{$graduatedData->transaction_id}}</td>
                    </tr>
                    <tr>
                        <th>Total Payment</th>
                        <td>{{$graduatedData->total}}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="reg_footer">
            <P>**Batch Representation will handover Invitation letter to you**<br>
                **When You Came Pleace carrey your Invitation card** </P>
        </div>


    </div> -->


    <div class="pdf_main_wrap">

        <img class="imgtop001"
            src="{{'data:image/png;base64,'.base64_encode(file_get_contents(public_path('logo/'.'top_lft.png')))}}"
            alt="">
        <img class="imgmid001"
            src="{{'data:image/png;base64,'.base64_encode(file_get_contents(public_path('logo/'.'bg_img.png')))}}"
            alt="">
        <div class="top_header">
            <img src="{{'data:image/png;base64,'.base64_encode(file_get_contents(public_path('logo/'.'CGHS.png')))}}"
                alt="" width="120">
            <div class="top_tx_head">
                <h3 class="top_title">CHAKARIA GOVT HIGH SCHOOL</h3>
                EIIN No: 106169, Established: 1930, <br> Address: Chakaria-4741, Coxs Bazar, Chattogram.
                <br>
                <h3 class="hed_last">CGHS Alumni Association</h3>
            </div>

        </div>
        <div class="pdf_Reg_info">
            <h3>Registration Letter</h3>
            <div class="reg_tbl_info">
                <table class="reg_table">
                    <tbody>
                        <tr>
                            <th>Program Date</th>
                            <td>10th April, 2023 (9am - 6pm)</td>
                        </tr>
                        {{-- <tr>
                    <th>Program Time</th>
                    <td></td>
                </tr> --}}
                        <tr>
                            <th>Program Vanue</th>
                            <td>CHAKARIA GOVT HIGH SCHOOL</td>
                        </tr>
                        <tr>
                            <th>Regestration Id</th>
                            <td>{{$graduatedData->reg_id}}</td>
                        </tr>
                        <tr>
                            <th>Regestration Time</th>
                            <td>{{$graduatedData->date}}</td>
                        </tr>
                        <tr>
                            <th>Participate Name</th>
                            <td>{{$graduatedData->graduated_name}}</td>
                        </tr>

                        <tr>
                            <th>Batch</th>
                            <td>{{$graduatedData->batch}}</td>
                        </tr>
                        <tr>
                            <th>Mobile Number</th>
                            <td>{{$graduatedData->mobile_number}}</td>
                        </tr>
                        <tr>
                            <th>Address</th>
                            <td>{{$graduatedData->address}}</td>
                        </tr>
                        <tr>
                            <th>Guest Number</th>
                            <td>{{$graduatedData->guest}}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="reg_ings_section">
                <div class="bar_cd">
                    {!! DNS1D::getBarcodeHTML("$graduatedData->reg_id", 'C128')!!}
                    <p>Regestration Barcode</p>
                </div><br>



            </div>

        </div>
        <div class="graduatred_info">
            <table class="table_btm">
                <tbody>
                    <tr>
                        <th>Profession</th>
                        <td>{{$graduatedData->profession}}</td>
                    </tr>
                    <tr>
                        <th>Profession Institute</th>
                        <td>{{$graduatedData->profession_institute}}</td>
                    </tr>
                    <tr>
                        <th>Designation</th>
                        <td>{{$graduatedData->designation}}</td>
                    </tr>
                    <tr>
                        <th>Persent Address</th>
                        <td>Dhaka, Uttara</td>
                    </tr>
                    <tr>
                        <th>T-Shirt Size</th>
                        <td>{{$graduatedData->t_shirt}}</td>
                    </tr>
                    <tr>
                        <th>Blood Group</th>
                        <td>{{$graduatedData->blood_group}}</td>
                    </tr>
                    <tr>
                        <th>Payment Number</th>
                        <td>{{$graduatedData->bkash}}</td>
                    </tr>
                    <tr>
                        <th>Transaction Id</th>
                        <td>{{$graduatedData->transaction_id}}</td>
                    </tr>
                    <tr>
                        <th>Total Payment</th>
                        <td>{{$graduatedData->total}}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="reg_footer">
            <P>**Batch Representation will handover Invitation letter to you**<br>
                **When You Came Pleace carrey your Invitation card** </P>
        </div>
        <img class="imgbtn001"
            src="{{'data:image/png;base64,'.base64_encode(file_get_contents(public_path('logo/'.'btn_img.png')))}}"
            alt="">


    </div>





    <style>
    .top_title {
        color: #1c3795;
    }

    .hed_last {
        margin-top: 10px;
        font-weight: bold;
        color: #7f0000;
    }

    .top_header .top_tx_head h5 {
        font-size: 28px;
        font-weight: bold;
    }

    .top_header .top_tx_head {
        position: absolute;
        display: inline-block;
        width: 80%;
        top: 4px;
        font-size: 14px;
        text-align: center;
        left: 50%;
        transform: translate(-50%, 0);
    }

    .pdf_main_wrap {
        margin: 0 auto;
        width: 600px;
        /* border: 1px solid #ddd;
        padding: 40px 30px; */
        position: relative;

    }

    .top_header {
        display: block;
        clear: both;
        width: 100%;
        position: relative;
        height: 150px;

    }

    .top_header h3 {
        font-weight: bold;

    }

    .pdf_Reg_info h3 {
        position: absolute;
        left: 50%;
        top: 0;
        transform: translate(-50%, 0);
        height: 200px;
        color: #1c3795;

    }

    .top_header img {
        display: inline-block;
        position: absolute;
        top: 20px
    }

    .top_header .top_tx_head h3 {
        font-size: 20px;
    }

    .reg_tbl_info {
        width: 380px;
        position: absolute;
        left: 0;
        padding-right: 20px;
        top: 50px;
    }

    .reg_ings_section {
        width: 190px;
        position: absolute;
        right: 0;
        text-align: center;
        top: 50px;
    }

    .reg_footer p {
        margin: 0;
        padding: 0;
    }

    .pdf_Reg_info {
        position: relative;
        height: 360px;
    }

    .reg_tbl_info {}

    .reg_table {
        width: 100%;
        border: 1px solid #dee2e6;
    }

    .reg_table tr th {
        font-weight: bold;
    }

    .reg_table tr th,
    .reg_table tr td {
        border: 1px solid #dee2e6;
        padding: 5px 10px;
        text-align: left;
        font-size: 13px;
    }

    .reg_table tr th {}

    .reg_ings_section img.border.rounded.ml {
        width: 200px;
        height: 190px;
        object-fit: cover;
    }

    .table_btm tr th,
    .table_btm tr td {
        border: 1px solid #dee2e6;
        padding: 4px 20px;
        text-align: left;
        font-size: 13px;
    }

    .table_btm {
        width: 100%;
        border: 1px solid #dee2e6;
    }

    .table_btm tr th {
        font-weight: bold;
    }

    .reg_footer {
        display: block;
        text-align: center;
        border: 1px solid #ddd;
        margin: 5px 0;
        padding: 5px 8px;
        color: #ea1f26;
        font-size: 13px;
    }

    .footer_contact {
        display: block;
        position: relative;
        height: 30px;
    }

    .contact_number {
        position: absolute;
        left: 0;
    }

    .email_info {
        position: absolute;
        right: 0;
    }

    .bar_cd {
        text-align: center !important;
        margin: 0 auto;
        position: absolute;
        right: 18px;
    }

    .reg_ings_section img {
        width: 190px;
        object-fit: cover;
        height: 200px;
        margin-top: 40px;
    }

    .bar_cd p {
        padding: 0 !important;
        margin: 0 !important;
    }

    .imgbtn001 {
        width: 100%;
    }

    .imgtop001 {
        position: absolute;
        width: 90px;
        right: 0px;
        top: 25px;
    }

    .imgmid001 {
        position: absolute;
        width: 470px;
        left: 50%;
        transform: translate(-50%, -50%);
        top: 50%;
        z-index: -1;
        opacity: 0.5;
    }
    </style>









    <p></p>








</body>

</html>