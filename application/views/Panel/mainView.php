<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<main>
    <div class="container" id="app">
        <div class="row">
        <?php foreach($veri as $row)?>
        <h5>Hoşgeldin, <?php echo $row->name; ?> <?php if (!empty($row->nickName)) { ?>"<?php echo $row->nickName; ?>" <?php } ?><?php echo $row->surName; ?></h5>        
        <?php ?>
            <div class="col s12">
                <div class="card hoverable">
                    <div class="card-content">
                    <span class="card-title blue-text"><i class="fa fa-pagelines" aria-hidden="true"></i> Etkinlikler</span>
                         <table>
                            <thead>
                            <tr>
                                <th>İsim</th>
                                <th>Yer</th>
                                <th>Tarih</th>
                                <th>İşlemler</th>
                            </tr>
                            </thead>

                            <tbody v-for="backup in filteredBackup">
                            <tr>
                                <td>{{ backup.name}}</td>
                                <td>{{ backup.place}} </td>
                                <td>{{ backup.date}} {{ backup.date2}}</td>
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
    </div>
</main>

<script>
    //initialize the component 

//data
    var app = new Vue({
        el: '#app',
        data: function(){
            return{
                search :"",
                gridData : [
                    <?php foreach($etkinlikler as $row){ ?>
                    {name : '<?php echo $row->name; ?>',place : '<?php echo $row->place; ?>',date : '<?php echo date_tr('j F Y, l', $row->date); ?>',date2 : '<?php if (!($row->date2 == "0000-00-00")) { echo "- ",date_tr('j F Y, l', $row->date2); } ?>', action : 'edit'},
                    <?php } ?>
                ]};
        },
        
        computed:{
            filteredBackup:function(){
                var self = this;
                return this.gridData.filter(function(backup){return backup.name.toLowerCase().indexOf(self.search.toLowerCase())>=0;});
        }
        }
    });
</script>