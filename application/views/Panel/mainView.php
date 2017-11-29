<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<main>
    <div class="container">
        <div class="row">
        <?php foreach($veri as $row)?>
            <div class="col s12 m6">
                <div class="card hoverable">
                    <div class="card-content">
                    <span class="card-title blue-text"><i class="fa fa-address-card" aria-hidden="true"></i> Hakkınızda</span>
                        <div class="row">
                            <div class="col s12 hoverable">
                                <div class="tooltip red-text">İsim</div>
                                <div class="value"><?php echo $row->name; ?> "<?php echo $row->nickName; ?>" <?php echo $row->surName; ?></div>
                            </div>
                            <div class="col s12 hoverable">
                                <div class="tooltip red-text">Cins</div>
                                <div class="value"><?php getGenderNameByID($row->gender); ?></div>
                            </div>
                            <?php if ($row->isStudent == 1) { ?>
                            <div class="col s12 hoverable">
                                <div class="tooltip red-text">Öğrenim</div>
                                <div class="value"><?php echo $row->uniDep; ?></div>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php ?>
            <div class="col s12 m6">
                    <div class="card hoverable">
                        <div class="card-content">
                        <span class="card-title blue-text"><i class="fa fa-bullhorn" aria-hidden="true"></i> Ne kadar rezilsiniz?</span>
                            <div class="row">
                                <div class="col s6 hoverable">
                                    <div class="tooltip red-text">Rezillik</div>
                                    <div class="value">
                                    
                                        <div class="switch">
                                            <label>
                                            Kapalı
                                            <input disabled type="checkbox" <?php $val0 = getConfirmUserByID($row->userid); if ($val0 == 2) { ?>checked="checked" <?php } ?>>
                                            <span class="lever" ></span>
                                            Açık
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col s6 hoverable">
                                    <div class="tooltip red-text">Rezillik Seviyeniz</div>
                                    <div class="value">
                                        fasd
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col s6 hoverable">
                                    <div class="tooltip red-text">Rezillik Oranı</div>
                                    <div class="value">% 20</div>
                                    <p class="range-field">
                                        <input type="range" id="test5" value="20" />
                                    </p>
                                </div>
                                <?php if ($row->isStudent == 1) { ?>
                                <div class="col s6 hoverable">
                                    <div class="tooltip red-text">Rezilite</div>
                                    <div class="value">% 70</div>
                                    <p class="range-field">
                                        <input type="range" id="test5" value="70" />
                                    </p>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    <h6>*Rezillik seviyesi ve oranı sallamasyondur yakında gerçekleşicek.</h6>
    </div>
</main>