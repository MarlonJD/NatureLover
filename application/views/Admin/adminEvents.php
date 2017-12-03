<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<main>
    <h2 class="center">Etkinlikler</h2>
    <div class="container">
        <div id="app">
            <div class="input-field">
                <i class="material-icons prefix">search</i>
                <input id="icon_prefix" type="text" v-model="search">
                <label for="icon_prefix">Ara</label>
            </div>
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
                    <td><a class="btn-floating waves-effect waves-light red" :href="'<?php echo base_url('admin/eventDelete/'); ?>' + backup.username"><i class="fa fa-trash"></i> Delete</a>
                    <a class="btn-floating waves-effect waves-light blue" href="admin/eventEdit/"><i class="fa fa-pencil"></i> Edit</a>
                    <a class="btn-floating waves-effect waves-light green" :href="'<?php echo base_url('admin/EventParts/'); ?>' + backup.username"><i class="fa fa-eye"></i> Detail</a>
                </td>
                </tr>
                </tbody>
            </table>
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
                    {name : '<?php echo $row->name; ?>',place : '<?php echo $row->place; ?>',date : '<?php echo $row->date; ?>',date2 : '<?php echo $row->date2; ?>', action : 'edit'},
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