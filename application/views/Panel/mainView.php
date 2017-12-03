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
                    <span class="card-title blue-text"><i class="fa fa-pagelines" aria-hidden="true"></i> <b>Etkinlikler</b></span>
                        
                        <ul class="collapsible">
                            <li v-for="backup in filteredBackup">
                                <div class="collapsible-header blue-text text-lighten-2">{{ backup.name}} || {{ backup.udate}} </div>
                                <div class="collapsible-body">
                                    <span><h6>{{ backup.shortDetail }}</h6></br><b>Yer:</b> {{ backup.place}}</br>
                                    <b>Tarih:</b> {{ backup.date}} {{ backup.date2}}</br>
                                    <b>Tür</b>: {{ backup.type}} - {{ backup.subType}}</br>
                                        <div class="card-action">
                                        <?php $sayi = rand(); ?>
                                            <a href="#">
                                                    <i class="fa fa-eye fa-2x right" aria-hidden="true"></i>
                                            </a>            
                                            <a :href="'<?php echo base_url('panel/join/'); ?>' + backup.permaId"><i class="fa fa-plus fa-2x right" aria-hidden="true"></i></a>
                                    </span>
                                        
                                </div>
                            </li>
                        </ul>

                    </div>
                </div>
            </div>
        *Göz olan buton çalışmıyor gözü çıkmış ehuehuehue xDé
    </div>
</main>

<script>

//data
    var app = new Vue({
        el: '#app',
        data: function(){
            return{
                search :"",
                gridData : [
                    <?php foreach($etkinlikler as $row){ ?>
                    {name : '<?php echo $row->name; ?>',permaId: '<?php echo $row->permaId; ?>' ,shortDetail: "<?php echo $row->shortDetail; ?>", place : '<?php echo $row->place; ?>',date : '<?php echo date_tr('j F Y, l', $row->date); ?>',date2 : '<?php if (!($row->date2 == "0000-00-00")) { echo "- ",date_tr('j F Y, l', $row->date2); } ?>',udate: '<?php echo date_tr('j F Y', $row->date); ?>', type: '<?php getTypeNameByID($row->type); ?>',subType: '<?php getSubTypeNameByID($row->subType); ?>' , action : 'edit'},
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