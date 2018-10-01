<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<main>
    <div class="container">
        <div id="app">
        <br />

        <h5>Excel-Blätter</h5>
            <table class="bordered">
                <thead>
                <tr>
                    <th class="h">ID</th>
                    <th class="h">Blattname</th>
                    <th class="h">Dateiname</th>
                    <th class="h">Datum</th>
                    <th class=h>Aktionen</th>
                </tr>
                </thead>

                <tbody v-for="backup in filteredBackup">
                <tr>
                    <td class="v">{{ backup.id }} </td>
                    <td class="v">{{ backup.excelName }} </td>
                    <td class="v">{{ backup.file_dir }}</td>
                    <td class="v">{{ backup.date_uploaded }}</td>
                    <td><a class="btn-floating waves-effect waves-light red" :href="'<?php echo base_url('admin/deleteExcel/'); ?>' + backup.file_name"><i class="fa fa-trash"></i></a>
                    <!--a class="btn-floating waves-effect waves-light blue" href="#"><i class="fa fa-pencil"></i> Edit</a -->
                    <a class="btn-floating waves-effect waves-light green" :href="'<?php echo base_url('panel/viewExcel/'); ?>' + backup.file_name"><i class="fa fa-eye"></i></a>
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
                    <?php foreach($excels as $row){ ?>
                    {id : '<?php echo $row->id; ?>',excelName: '<?php echo $row->nameExcel; ?>',file_dir : '<?php echo $row->file_dir; ?>', date_uploaded : '<?php echo $row->date_uploaded; ?>', file_name: '<?php echo $row->file_name; ?>'},
                    <?php } ?>
                ]};
        },
        
        computed:{
            filteredBackup:function(){
                var self = this;
                return this.gridData.filter(function(backup){return backup.id.toLowerCase().indexOf(self.search.toLowerCase())>=0;});
        }
        }
    });
</script>