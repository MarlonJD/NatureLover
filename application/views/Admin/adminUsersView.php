<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<main>
    <h2 class="center">Kullanıcılar</h2>
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
                    <th>Kullanıcı Adı </th>
                    <th>Grup</th>
                    <th>İşlemler</th>
                </tr>
                </thead>

                <tbody v-for="backup in filteredBackup">
                <tr>
                    <td>{{ backup.name}}</td>
                    <td>{{ backup.username}} </td>
                    <td>{{ backup.grup}}</td>
                    <td><a class="btn-floating waves-effect waves-light red" :href="'<?php echo base_url('admin/userDelete/'); ?>' + backup.username"><i class="fa fa-trash"></i> Delete</a>
                    <a class="btn-floating waves-effect waves-light blue" href="#"><i class="fa fa-pencil"></i> Edit</a>
                    <a class="btn-floating waves-effect waves-light green" :href="'<?php echo base_url('admin/user/'); ?>' + backup.username"><i class="fa fa-eye"></i> Detail</a>
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
                    <?php foreach($uyeler as $row){ ?>
                    {username : '<?php echo $row->username; ?>',name : '<?php echo getNamebyID($row->id); ?>', type : '<?php echo $row->created_at; ?>', grup: '<?php echo getConfirmationbyID($row->is_confirmed); ?>' , action : 'edit'},
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