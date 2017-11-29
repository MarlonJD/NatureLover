<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<?php foreach($veri as $row){ ?>

<div class="row">
    <div class="col s12 m6">
        <div class="card hoverable">
            <div class="card-content">
              <span class="card-title"><i class="fa fa-address-card" aria-hidden="true"></i> <?php echo $this->lang->line("u_header0"); ?></span>
                <div class="row">
                    <div class="col s6 hoverable">
                        <div class="tooltip"><?php echo $this->lang->line("u_name"); ?></div>
                        <div class="value"><?php echo $row->name; ?></div>
                    </div>
                    <div class="col s3 hoverable">
                        <div class="tooltip"><?php echo $this->lang->line("u_gender"); ?></div>
                        <div class="value"><?php getGenderNameByID($row->gender); ?></div>
                    </div>
                    <div class="col s3 hoverable">
                        <div class="tooltip"><?php echo $this->lang->line("u_bodysize"); ?></div>
                        <div class="value"><?php echo $row->bodysize; ?></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col s3 hoverable">
                        <div class="tooltip"><?php echo $this->lang->line("u_hip"); ?></div>
                        <div class="value"><?php echo $row->hip; ?></div>
                    </div>
                    <div class="col s3 hoverable">
                        <div class="tooltip"><?php echo $this->lang->line("u_waist"); ?></div>
                        <div class="value"><?php echo $row->waist; ?></div>
                    </div>
                    <div class="col s3 hoverable">
                        <div class="tooltip"><?php echo $this->lang->line("u_bloodtype"); ?></div>
                        <div class="value"><?php echo $row->bloodtype; ?></div>
                    </div>
                    <div class="col s3 hoverable">
                        <div class="tooltip"><?php echo $this->lang->line("u_polarown"); ?></div>
                        <div class="value"><?php echo $row->polarown; ?></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col s6 hoverable">
                        <div class="tooltip"><?php echo $this->lang->line("u_aim"); ?></div>
                        <div class="value"><?php echo getAimNameByID($row->aim); ?></div>
                    </div>
                    <div class="col s3 hoverable">
                        <div class="tooltip"><?php echo $this->lang->line("u_fatp"); ?></div>
                        <div class="value"><?php echo $row->fatp; ?>%</div>
                    </div>
                    <div class="col s3 hoverable">
                        <div class="tooltip"><?php echo $this->lang->line("u_proteinp"); ?></div>
                        <div class="value"><?php echo $row->proteinp; ?>%</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col s3 hoverable" >
                        <div class="tooltip"><?php echo $this->lang->line("u_chop"); ?></div>
                        <div class="value"><?php echo $row->chop; ?>%</div>
                    </div>
                    <div class="col s3 hoverable">
                        <div class="tooltip"><?php echo $this->lang->line("u_fatpkg"); ?></div>
                        <div class="value"><?php echo $row->fatpkg; ?></div>
                    </div>
                    <div class="col s3 hoverable">
                        <div class="tooltip"><?php echo $this->lang->line("u_hourinweek"); ?></div>
                        <div class="value"><?php echo $row->hourinweek; ?></div>
                    </div>
                    <div class="col s3 hoverable">
                        <div class="tooltip"><?php echo $this->lang->line("u_weight"); ?></div>
                        <div class="value"><?php echo $row->weight; ?></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php list ($Kcal, $calFactor, $c, $p, $f, $aimName)=getCal($row->aim, $row->weight);?>
    <div class="col s12 m6">
        <div class="card hoverable">
            <div class="card-content">
              <span class="card-title"><i class="fa fa-area-chart" aria-hidden="true"></i> <?php echo $this->lang->line("u_aim"); ?></span>
              <table class="striped">
                    <tr class="hoverable">
                        <th><?php echo $this->lang->line("u_type"); ?></th>
                        <td><?php echo $aimName; ?></td>
                    </tr>
                    <tr class="hoverable">
                        <th><?php echo $this->lang->line("u_cho"); ?></th>
                        <td><?php echo $c; ?> g</td>
                    </tr>
                    <tr class="hoverable">
                        <th><?php echo $this->lang->line("u_protein"); ?></th>
                        <td><?php echo $p; ?> g</td>
                    </tr>
                    <tr class="hoverable">
                        <th><?php echo $this->lang->line("u_fat"); ?></th>
                        <td><?php echo $f; ?> g</td>
                    </tr>
                    <tr class="hoverable">
                        <th><?php echo $this->lang->line("u_calorie"); ?></th>
                        <td><?php echo $Kcal; ?> Kcal</td>
                    </tr>
                    <tr class="hoverable">
                        <th><?php echo $this->lang->line("u_calfactor"); ?></th>
                        <td><?php echo $calFactor; ?></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col s12 m3">
        <div class="card hoverable">
            <div class="card-content">
              <span class="card-title"><i class="fa fa-coffee" aria-hidden="true"></i> <?php echo $this->lang->line("u_breakfast"); ?></span>
              <table class="striped">
                    <tr class="hoverable">
                        <th><?php echo $this->lang->line("u_cho"); ?></th>
                        <td>10 g</td>
                    </tr>
                    <tr class="hoverable">
                        <th><?php echo $this->lang->line("u_protein"); ?></th>
                        <td>25 g</td>
                    </tr>
                    <tr class="hoverable">
                        <th><?php echo $this->lang->line("u_fat"); ?></th>
                        <td>40 g</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <div class="col s12 m3">
        <div class="card hoverable">
            <div class="card-content">
              <span class="card-title"><i class="fa fa-sun-o" aria-hidden="true"></i> <?php echo $this->lang->line("u_lunch"); ?></span>
              <table class="striped">
                    <tr class="hoverable">
                        <th><?php echo $this->lang->line("u_cho"); ?></th>
                        <td>30 g</td>
                    </tr>
                    <tr class="hoverable">
                        <th><?php echo $this->lang->line("u_protein"); ?></th>
                        <td>25 g</td>
                    </tr>
                    <tr class="hoverable">
                        <th><?php echo $this->lang->line("u_fat"); ?></th>
                        <td>30 g</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <div class="col s12 m3">
        <div class="card hoverable">
            <div class="card-content">
              <span class="card-title"><i class="fa fa-moon-o" aria-hidden="true"></i> <?php echo $this->lang->line("u_dinner"); ?></span>
              <table class="striped">
                    <tr class="hoverable">
                        <th><?php echo $this->lang->line("u_cho"); ?></th>
                        <td>30 g</td>
                    </tr>
                    <tr class="hoverable">
                        <th><?php echo $this->lang->line("u_protein"); ?></th>
                        <td>25 g</td>
                    </tr>
                    <tr class="hoverable">
                        <th><?php echo $this->lang->line("u_fat"); ?></th>
                        <td>15 g</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <div class="col s12 m3">
        <div class="card hoverable">
            <div class="card-content">
              <span class="card-title"><i class="fa fa-cutlery" aria-hidden="true"></i> <?php echo $this->lang->line("u_snack"); ?></span>
              <table class="striped">
                    <tr class="hoverable">
                        <th><?php echo $this->lang->line("u_cho"); ?></th>
                        <td>30 g</td>
                    </tr>
                    <tr class="hoverable">
                        <th><?php echo $this->lang->line("u_protein"); ?></th>
                        <td>25 g</td>
                    </tr>
                    <tr class="hoverable">
                        <th><?php echo $this->lang->line("u_fat"); ?></th>
                        <td>15 g</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
<?php } ?> 
