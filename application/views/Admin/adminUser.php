<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<main>
    <div class="container">
        <div class="row">
        <?php foreach($veri as $row)?>
            <div class="col s12 m12">
                <div class="card hoverable">
                    <div class="card-content">
                    <span class="card-title blue-text"><i class="fa fa-address-card" aria-hidden="true"></i> Hakkınızda</span>
                        <div class="row">
                            <div class="col s6 hoverable">
                                <div class="tooltip red-text">ID</div>
                                <div class="value"><?php echo $row->id; ?></div>
                            </div>
                            <div class="col s6 hoverable">
                                <div class="tooltip red-text">Kullanıcı Adı</div>
                                <div class="value"><?php getUserNamebyID($row->userid); ?></div>
                            </div>
                            <div class="col s12 hoverable">
                                <div class="tooltip red-text">İsim</div>
                                <div class="value"><h5><?php echo $row->name; ?> <?php if (!empty($row->nickName)) { ?>"<?php echo $row->nickName; ?>" <?php } ?><?php echo $row->surName; ?></h5></div>
                            </div>  
                            <div class="col s12 hoverable">
                                <div class="tooltip red-text">Cins</div>
                                <div class="value"><?php getGenderNameByID($row->gender); ?></div>
                            </div>
                            <?php if ($row->isStudent == 1) { ?>
                            <div class="col s12 hoverable">
                                <div class="tooltip red-text">Öğrenim</div>
                                <div class="value"><h5><?php echo $row->uniDep; ?></h5></div>
                            </div>
                            <?php } ?>
                            <div class="col s12 hoverable">
                                <div class="tooltip red-text">TC Kimlik</div>
                                <div class="value"><h5><?php echo $row->citizen; ?></h5></div>
                            </div>
                            <div class="col s12 hoverable">
                                <div class="tooltip red-text">Paranoyaklık Seviyesi</div>
                                <div class="value"><h5><?php getParanoidNameByID($row->paranoid); ?></h5></div>
                            </div>
                            <div class="col s12 hoverable">
                                <div class="tooltip red-text">Kampçılık Seviyesi</div>
                                <div class="value"><h5><?php echo getCamperNameByID($row->camperLevel); ?></h5></div>
                            </div>
                            <div class="col s12 hoverable">
                                <div class="tooltip red-text">Referans</div>
                                <div class="value"><h5><?php echo $row->ref; ?></h5></div>
                            </div>
                            <div class="col s12 hoverable">
                                <div class="tooltip red-text">Telefon</div>
                                <div class="value"><h5><?php echo $row->phone; ?></h5></div>
                            </div>
                            <div class="col s12 hoverable">
                                <div class="tooltip red-text">Acil Tel No</div>
                                <div class="value"><h5><?php echo $row->ePhone; ?></h5></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php ?>
            <div class="col s12 m6">
                    <div class="card hoverable">
                        <div class="card-content">
                        <span class="card-title blue-text"><i class="fa fa-bullhorn" aria-hidden="true"></i> Ne kadar rezil bir doğasever?</span>
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
                <div class="col s12 m6">
                <div class="card hoverable">
                    <div class="card-content">
                    <span class="card-title blue-text"><i class="fa fa-pagelines" aria-hidden="true"></i> İşlemler</span>
                        Durum:  </br><?php getConfirmUserByID($row->userid); 
                                        if ($val0 == 0) { 
                                            echo "Onaylanmadı" ;
                                        ?>
      
                                        <?php 
                                        } elseif ($val0 == 1) {
                                            echo "Hazırlık";
                                        ?>
                                           
                                        <?php 
                                        } elseif ($val0 == 2) {
                                            echo "Ana Grup";
                                        } 
                                        ?>
                                </br></br>
                                <div class="center">
                                <?php getConfirmUserByID($row->userid); 
                                if ($val0 == 0) { ?>
                                <a class="waves-effect waves-light btn green" href="<?php echo base_url('admin/userConfirm/'); ?><?php getUserNamebyID($row->userid); ?>"><i class="fa fa-check"></i> Onayla</a></br>
                                <?php } elseif ($val0 == 1) {
                                        ?> 
                                <a class="waves-effect waves-light btn blue" href="<?php echo base_url('admin/userUp/'); ?><?php getUserNamebyID($row->userid); ?>"><i class="fa fa-birthday-cake"></i> Terfi Ettir</a></br>
                                <?php } elseif ($val0 == 2) { ?>
                                <a class="waves-effect waves-light btn purple" href="<?php echo base_url('admin/userDown/'); ?><?php getUserNamebyID($row->userid); ?>"><i class="fa fa-frown-o"></i> Hazırlığa Düşür</a></br>
                                <?php } ?>
                                <a class="waves-effect waves-light btn orange" href="<?php echo base_url('admin/userEdit/'); ?><?php getUserNamebyID($row->userid); ?>"><i class="fa fa-pencil"></i> Düzenle</a></br>
                                <a class="waves-effect waves-light btn red" href="<?php echo base_url('admin/profileDelete/'); ?><?php getUserNamebyID($row->userid); ?>"><i class="fa fa-trash"></i> Profili Sil</a>             
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