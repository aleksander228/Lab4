<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<html>
    <body>
        <div id="content">
            <font face="Times New Roman, Times, serif">
                <?php
                $f=fopen("stat.txt","a+");
                flock($f,LOCK_EX);
                $count=fread($f,100);
                @$count++;
                ftruncate($f,0);
                fwrite($f,$count);
                fflush($f);
                flock($f,LOCK_UN);
                fclose($f);
                ?>
                <table width="90%" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="black">    
                    <tr bgcolor="gray">
                        <th width="18%" bgcolor="gray" scope="col">
                            <div align="center"><font color="#FFFFFF">Имя</font></div>
                        </th>
                        
                        <th width="69%" bgcolor="gray" scope="col">
                            <div align="center"><font color="#FFFFFF">Количество страниц</font></div>
                        </th>
                        
                        <th width="13%" bgcolor="gray" scope="col">
                            <div align="center"><font color="#FFFFFF">Страница</font></div>
                        </th>
                    </tr>
                </table>
            </font>
        </div>
    </body>
 </html>   