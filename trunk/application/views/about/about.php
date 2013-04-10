            <!-- main content -->
            <div id="contentwrapper">
                <div class="main_content">
                    
                    <nav>
                        <div id="jCrumbs" class="breadCrumb module">
                            <ul>
                                <li>
                                    <a href="<?php echo base_url(); ?>"><i class="icon-home"></i></a>
                                </li>
                                <li>
                                    Thông tin
                                </li>
                            </ul>
                        </div>
                    </nav>    
                    <!-- nội dung -->
                        <div class="row-fluid">
                        <div class="span12">
                            <h3 class="heading">Giới thiệu công ty và phương châm công ty</h3>
                            <table class="table table-striped table-bordered dTableR" id="dt_a">
                                <thead>
                                    <tr>
                                        <th>STT</th>
                                        <th>Loại</th>
                                        <th style="width: 100px">Sửa</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                if($query != FALSE)
                                {
                                    $i = 0;
                                    foreach($query as $row)
                                        {
                                ?>
                                <tr>
                                    <td class="center"><?php echo $i++; ?></td>
                                    <td><?php echo ($row->cataloging=='thongtincongty')?'Thông tin công ty':'Phương châm công ty'; ?></td>
                                    <td class="center" ><a href="<?php echo base_url(); ?>index.php/about/update/<?php echo $row->id; ?>"   ><img src="<?php echo base_url(); ?>themes/img/cmdupdate.png" /></a></td>
                                </tr>
                                <?php   }       
                                }
                                ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>