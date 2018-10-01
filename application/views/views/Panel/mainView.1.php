<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<main>
    <div class="container">
        <div class="row">
        <?php foreach($veri as $row)?>
        <h5>Hoşgeldin, <?php echo $row->name; ?> <?php if (!empty($row->nickName)) { ?>"<?php echo $row->nickName; ?>" <?php } ?><?php echo $row->surName; ?></h5>
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
            

            <div class="col s12 m12">
                <div class="card hoverable">
                    <div class="card-content">
                    <span class="card-title blue-text"><i class="fa fa-pagelines" aria-hidden="true"></i> Etkinlikler</span>
                         <table>
                            <thead>
                            <tr>
                                <th>Etkinlik</th>
                                <th>Konum</th>
                                <th>Tür</th>
                                <th>Tarih</th>
                                <th></th>
                            </tr>
                            </thead>

                            <tbody v-for="backup in filteredBackup">
                            <tr>
                                <td>Eğriova</td>
                                <td>Eğriova Yangın Göleti </td>
                                <td>Kamplı 3 Gün</td>
                                <td>30 Şubat 2017</td>
                                <td>
                                <a class="btn-floating waves-effect waves-light blue" href="#"><i class="fa fa-plus"></i> Katıl</a>
                                <a class="btn-floating waves-effect waves-light green" :href="'<?php echo base_url('admin/user/'); ?>' + backup.username"><i class="fa fa-eye"></i> Detail</a>
                            </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            </div>
    <h6>*Rezillik seviyesi ve oranı sallamasyondur yakında gerçekleşicek.</h6>
    </div>
</main>