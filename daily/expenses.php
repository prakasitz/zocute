<?php 
    $_GET["isShowNav"] = 1;
    require_once '../config.php';
    include_once '../includes/header.php';
?>

<div class="breadcrumbs">
    <div class="breadcrumbs-inner">
        <div class="row m-0">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>บันทึกรายจ่าย</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Dashboard</a></li>
                            <li><a href="#">บันทึกประจำวัน</a></li>
                            <li class="active">บันทึกรายจ่าย</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="content">
    <div class="row">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header">
                    <strong class="card-title">บันทึกรายจ่าย</strong>
                </div>
                <div class="card-body card-block">
                    <form action="#" id="form-record-expenses" method="post" class="form-horizontal">
                        <div class="row form-group">
                            <div class="input-group col-lg-12">
                                <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                <input type="date" id="input-date" name="date" class="form-control">
                                </div>
                        </div>
                        <div class="row form-group">
                                <div class="input-group col-lg-6">
                                    <div class="input-group-addon"><i class="fa fa-circle"></i></div>
                                    <select name="typeExpense" id="select-type-expense" class="form-control selectpicker" data-size="10">
                                        <option>เลือกประเภท</option>
                                        <option value="1" data-icon="fa fa-money">การออม&การลงทุน</option>
                                        <option value="2" data-icon="fa fa-barcode">สาธาณูปโภค(ค่าน้ำ ค่าไฟ ค่าโทรศัพท์ ฯลฯ)</option>
                                        <option value="3" data-icon="fa fa-group">ครอบครัว&ส่วนตัว</option>
                                        <option value="4" data-icon="fa fa-coffee">สันทนาการ</option>
                                        <option value="5" data-icon="fa fa-credit-card">หนี้สิน</option>
                                        <option value="6" data-icon="fa fa-circle">อื่นๆ</option>
                                    </select>
                                    </div>
                                </div>
                        </div>
                        <div class="row form-group">
                            <div class="input-group col-lg-12">
                                <div class="input-group-addon"><i class="fa fa-pencil"></i></div>
                                <input type="text" id="input-note" name="note" class="form-control" placeholder="จดบันทึก">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="input-group col-lg-12">
                                <div class="input-group-addon"><strong>THB</strong></div>
                                <input type="number" step="0.01" min="0" id="input-money-expense" name="moneyExpense" class="form-control" placeholder="จำนวนเงิน">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-lg-6">
                                <button class="btn btn-info btn-block" type="submit">บันทึก</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
    include_once '../includes/footer.php';
?>
