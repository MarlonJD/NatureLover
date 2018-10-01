<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<main>
    <div class="container">
        <div class="row">
        <?php foreach($etkinlik as $row) { ?>
            <div class="col s12 m12">
                <div class="card hoverable">
                    <div class="card-content">
                    <span class="card-title blue-text"><i class="fa fa-address-card" aria-hidden="true"></i> Etkinlik Hakkında</span>
                        <div class="row">
                            <div class="col s12 m6 hoverable">
                                <div class="tooltip red-text">Etkinlik Adı</div>
                                <div class="value"><h5><?php echo $row->name ?></h5></div>
                            </div>
                            <div class="col s12 m6 hoverable">
                                <div class="tooltip red-text">Tarih</div>
                                <div class="value"><h5><?php echo date_tr('j F Y, l', $row->date); ?></br><?php echo date_tr('j F Y, l', $row->date2); ?></h5></div>
                            </div>
                            <div class="col s12 m6 hoverable">
                                <div class="tooltip red-text">Sahibi</div>
                                <div class="value"><h5><?php echo $row->owner; ?></h5></div>
                            </div>
                            <div class="col s12 m6 hoverable">
                                <div class="tooltip red-text">Tür</div>
                                <div class="value"><h5><?php getTypeNameByID($row->type); ?> / <?php getSubTypeNameByID($row->subType); ?></h5></div>
                            </div>
                            <div class="col s12 hoverable">
                                <div class="tooltip red-text">Konum</div>
                                <div class="value"><h5><?php echo $row->place; ?></h5></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
        
            <div class="col s12 m12">
                <div class="card hoverable">
                    <div class="card-content">
                    <span class="card-title blue-text"><i class="fa fa-pagelines" aria-hidden="true"></i>Katılımcılar (<?php echo getPpbyID($row->id)?>)</span>
                    <?php } ?>             
                        <table>
                            <thead>
                            <tr>
                                <th>İsim</th>
                                <th>Ulaşım</th>
                                <th>Tür</th>
                                <th>Durum</th>
                                <th></th>
                            </tr>
                            </thead>

                            <tbody v-for="backup in filteredBackup">
                            <?php foreach($katilimcilar as $row) { ?>
                            <tr>
                                <td><?php getNamebyID($row->userID); ?></td>
                                <td><?php echo $row->tPortation; ?></td>
                                <td><?php echo $row->type; ?></td>
                                <td><?php echo $row->status; ?></td>
                                <td>
                            </td>
                            </tr>
                            <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            </div>
        
    <h6>*Rezillik seviyesi ve oranı sallamasyondur yakında gerçekleşicek.</h6>
    </div>
</main>