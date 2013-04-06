    <!-- Content -->
    <div class="content">
        <div style="font-size: 25px;font-weight: bold;">Giới thiệu thông tin công ty & Phương châm công ty .</div>
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
                                    <td><?php echo $row->cataloging; ?></td>
                                    <td><?php echo $row->content_vi; ?></td>
                                    <td><?php echo $row->content_en; ?></td>
                                    <td class="center"><a href="<?php echo base_url(); ?>index.php/about/update/<?php echo $row->id; ?>"><img src="<?php echo base_url(); ?>themes/images/cmdupdate.png" /></a></td>
                                </tr>
                    <?php   }       
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    