
                <!-- main content -->
<?php echo form_open('about/update_action') ?>
    <input type="hidden" name='id' value='<?php echo $this->uri->segment(3) ?>' />
            <div id="contentwrapper">
                <div class="main_content">
                    
                    <nav>
                        <div id="jCrumbs" class="breadCrumb module">
                            <ul>
                                <li>
                                    <a href="<?php echo base_url(); ?>"><i class="icon-home"></i></a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url(); ?>index.php/about/index">Thông Tin</a>
                                </li>     
                                <li>
                                    <?php echo ($query[0]['cataloging']=='thongtincongty')?'Thông tin công ty':'Phương châm công ty'; ?>
                                </li>
                            </ul>
                        </div>
                    </nav>    
                    <!-- nội dung -->
                    <h3><?php echo ($query[0]['cataloging']=='thongtincongty')?'Thông tin công ty':'Phương châm công ty'; ?></h3>
                    
                    <br>
                    <h4>Nội dung bằng tiếng việt</h4>
                    <br>
                    <textarea id="txtndtiengviet" name="txtndtiengviet"><?php echo $query[0]['content_vi']; ?></textarea>
                    <script type="text/javascript">
			CKEDITOR.replace( 'txtndtiengviet' );
                    </script>
                    
                    <br>
                    <h4>Nội dung bằng tiếng anh</h4>
                    <br>
                    <textarea id="txtndtienganh" name="txtndtienganh"><?php echo $query[0]['content_en']; ?></textarea>
                    <script type="text/javascript">
			CKEDITOR.replace( 'txtndtienganh' );
                    </script>
                    
                    <br>
                    <div style="margin-left: 50%"><button>Xác nhận</button></div>                    
                </div>
            </div>
 <?php echo "</form>"; ?>