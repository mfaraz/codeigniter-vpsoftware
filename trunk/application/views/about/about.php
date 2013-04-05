<!-- Content wrapper -->
<div class="wrapper">
    <div>
       <a href="<?php echo base_url(); ?>" title=""><img src="<?php echo base_url(); ?>themes/images/loginLogo.png" alt="" /></a>
    </div>
	<!-- Left navigation -->
    <div class="leftNav">
    	<ul id="menu">
            <li class="dash"><a href="<?php echo site_url('about') ?>" title="" class="active"><span>Giới thiệu</span></a></li>
            <li class="graphs"><a href="charts.html" title=""><span>Graphs and charts</span></a></li>
            <li class="forms"><a href="form_elements.html" title=""><span>Form elements</span></a></li>
            <li class="login"><a href="ui_elements.html" title=""><span>Interface elements</span></a></li>
            <li class="typo"><a href="typo.html" title=""><span>Typography</span></a></li>
            <li class="tables"><a href="tables.html" title=""><span>Tables</span></a></li>
            <li class="cal"><a href="calendar.html" title=""><span>Calendar</span></a></li>
            <li class="gallery"><a href="gallery.html" title=""><span>Gallery</span></a></li>
            <li class="widgets"><a href="widgets.html" title=""><span>Widgets</span></a></li>
            <li class="files"><a href="file_manager.html" title=""><span>File manager</span></a></li>
            <li class="pic"><a href="icons.html" title=""><span>Buttons and icons</span></a></li>
            <li class="contacts"><a href="contacts.html" title=""><span>Contact list</span></a></li>
        </ul>
    </div>
        
        <script>
            function ChuyenTrang()
            {
                alert("truyen trang");
            }
        </script>      <button style='color: gray' onclick="ChuyenTrang()">Sửa</button>
        
        
    <!-- Content -->
    <div class="content">
      <div class="table">
            <div class="head"><h5 class="iFrames">Nội dung</h5></div>
            <table cellpadding="0" cellspacing="0" border="0" class="display" id="example">
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Loại</th>
                        <th>Nội dung tiếng việt</th>
                        <th>Nội dung tiếng anh</th>
                        <th>Sửa</th>
                        <th>Xóa</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if($query != FALSE)
                    {
                        $i = 0;
                        foreach($query as $row)
                            {
                                echo "<tr>";
                                echo "<td class='center'>".$i++."</td>";
                                echo "<td>".$row->cataloging."</td>";
                                echo "<td>".$row->content_vi."</td>";
                                echo "<td>".$row->content_en."</td>";
                                echo "<td class='center'><button style='color: gray'>Sửa</button></td>";
                                echo "<td class='center'><button style='color: gray'>Xóa</button></td>";
                                echo "</tr>";
                            }
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    
    <div class="fix"></div>
</div>