<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>

<div class="site-index">

    <div class="jumbotron text-center bg-transparent">
        <h1 class="display-4">Congratulations!</h1>

        <p class="lead">You have successfully created your Yii-powered application.</p>

        <p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">Get started with Yii</a></p>
    </div>
    <div class="body-content">
        <div class="row">

            <div class="col-lg-4">

                    <!--<table>
                        <tr>
                            <th>title</th>
                            <th>thumbnailLink</th>
                            <th>EmbedLink (Download) Link</th>
                            <th>modifiedDate</th>
                            <th>FileSize (MB)</th>
                            <th>ownerNames</th>
                        </tr>
                        <?php
/*                        foreach ($arr_body['items'] as $data){ */?>
                            <tr>

                                <td><?/*= $data['title'] */?></td>
                                <td><?php /*if(isset( $data['thumbnailLink']))
                                       echo   '<img src="'.$data['thumbnailLink'].'" style="width:100px;height:100px;  ">';
                                    else
                                        echo "NULL";
                                    */?>
                                </td>
                                <td><?php /*echo '<a href="'.  $data['embedLink'].'">Download</a>' */?></td>
                                <td><?php /*echo date('Y-m-d', strtotime($data['modifiedDate'] ));
                                    */?></td>
                                <td>
                                    <?php /*if(isset( $data['fileSize']))
                                        echo $data['fileSize']/1000 . "MB";
                                    else
                                        echo "NULL";
                                    */?>
                                </td>
                                <td><?/*= $data['ownerNames'][0] */?></td>

                            </tr>
                        <?php /*}  */?>
                    </table>-->
                </div>

            <table class="table">
                <thead>
                <tr>
                    <th scope="col">title</th>
                    <th scope="col">thumbnailLink</th>
                    <th scope="col">EmbedLink (Download) Link</th>
                    <th scope="col">modifiedDate</th>
                    <th scope="col">FileSize (MB)</th>
                    <th scope="col">ownerNames</th>

                </tr>
                </thead>
                <tbody>
                <?php
                foreach ($arr_body['items'] as $data){ ?>
                    <tr>

                        <td><?= $data['title'] ?></td>
                        <td><?php if(isset( $data['thumbnailLink']))
                                echo   '<img src="'.$data['thumbnailLink'].'" style="width:100px;height:100px;  ">';
                            else
                                echo "NULL";
                            ?>
                        </td>
                        <td><?php echo '<a href="'.  $data['embedLink'].'">Download</a>' ?></td>
                        <td><?php echo date('Y-m-d', strtotime($data['modifiedDate'] ));
                            ?></td>
                        <td>
                            <?php if(isset( $data['fileSize']))
                                echo $data['fileSize']/1000 . "MB";
                            else
                                echo "NULL";
                            ?>
                        </td>
                        <td><?= $data['ownerNames'][0] ?></td>

                    </tr>
                <?php }  ?>
                </tbody>
            </table>
        </div>
</div>
