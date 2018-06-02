<br />
    <div class="row no-pad row-eq-height"> 
        <div class="col-md-9">
            <div class="row no-pad">
                <div class="col-lg-12 articleBar">
                    Latest
                </div>
            </div>
            <?php
            include 'database_conn.php';		
            //Pagination is adapated from a tutorial
            if (isset($_GET['pg'])) 
            {
                $pg = $_GET['pg'];
            } 
            else
            {
                $pg = 1;
            }		
            $articlesPerPage = 5; // 5 articles per page currently. easily adjusted here	
            $offset = ($pg - 1) * $articlesPerPage;	//Need this to use as an offest in the SQL query to get data for different pages
            
            $sql2 = "SELECT COUNT(*) FROM article";		
            $result2 = $conn->query($sql2);
            $total_row = mysqli_fetch_row($result2);  
            $totalArticles = $total_row[0]; //number of articles in db
            $totalPages = ceil($totalArticles / $articlesPerPage); //no of record divided by articles per page. Ceil function to round up fractions
            
            $pagSql = "SELECT * FROM article ORDER BY ArticleID DESC LIMIT $offset, $articlesPerPage";
            $ragResult = $conn->query($pagSql);
            while($row = $ragResult->fetch_assoc())
            {
                $title = $row['Title'];
                $date = $row['Date'];
                $image = $row['Image'];
                $content = $row['Content'];
                $linky = $row['PageLink'];						
                
                //Dont want entire article posted to front page so using a shortened bit from the start of the article and then adding a link to click through to the article
                $contentShrink = substr($content, 0, 150);
                echo "<div class=\"row no-pad\">";
                echo "	<div class=\"col-9 articleTitle\">";
                echo "	<h4>$title</h4>";
                echo "</div>";
                echo "	<div class=\"col-3 articleDate\">$date</div>";					
                echo "</div>";
                echo "<div class=\"col-lg-12 articleImage\">";
                //Making the image also a link to click through
                echo "  <a href=\"article/$linky.php\"><img src=\"img/$image\" class=\"img-fluid\" alt\"$title\"/></a>";	
                echo "</div>";	
                echo "<div class=\"col-lg-12 articleText\">";	
                echo "	<p>$contentShrink...</p>";	
                echo "	<p><a href=\"article/$linky.php\">Click here to read more...</a></p>";	
                echo "</div>";
            }
            mysqli_close($conn);					
            ?>						
            <div class="col-12 pagZone d-none d-md-block">
                <ul class="pagination justify-content-center">
                    <li><a href="?pg=1"><< First</a></li>
                    <li class="<?php if($pg <= 1){ echo 'disabled'; } ?>">
                        <a href="<?php if($pg <= 1){ echo '#'; } else { echo "?pg=".($pg - 1); } ?>">< Prev</a>
                    </li>
                    <li class="<?php if($pg >= $totalPages){ echo 'disabled'; } ?>">
                        <a href="<?php if($pg >= $totalPages){ echo '#'; } else { echo "?pg=".($pg + 1); } ?>">Next ></a>
                    </li>
                    <li><a href="?pg=<?php echo $totalPages; ?>">Last >> </a></li>
                </ul>
            </div>
            <div class="col-12 pagZone2 d-sm-block d-md-none">
                <ul class="pagination justify-content-center">
                    <li><a href="?pg=1"><<</a></li>
                    <li class="<?php if($pg <= 1){ echo 'disabled'; } ?>">
                        <a href="<?php if($pg <= 1){ echo '#'; } else { echo "?pg=".($pg - 1); } ?>"><</a>
                    </li>
                    <li class="<?php if($pg >= $totalPages){ echo 'disabled'; } ?>">
                        <a href="<?php if($pg >= $totalPages){ echo '#'; } else { echo "?pg=".($pg + 1); } ?>">></a>
                    </li>
                    <li><a href="?pg=<?php echo $totalPages; ?>">>> </a></li>
                </ul>
            </div>
        </div>					

        <div class="col-lg-3 d-none d-lg-block sideLane">
            <div class="col-lg-12 rightBar">
                Links
            </div>
            <div class="col-lg-12">
                <img src="/img/icons/twittersmall.png" alt="email"> <a href="http://www.twitter.com/supremopete">@SupremoPete</a>
            </div>
            <div class="col-lg-12">
                <img src="/img/icons/ytsmall.png" alt="email"> <a href="http://www.youtube.com/supremopete">SupremoPete</a>
            </div>
            <div class="col-lg-12">
                <img src="/img/icons/mailsmall.png" alt="email"> <a href="mailto:pete@thescrubberyzone.com">pete@thescrubberyzone.com</a>
            </div>
        </div>
        
        <div class="col-md-3 d-none d-md-block d-lg-none sideLane">
            <div class="col-lg-12 rightBar">
                Links
            </div>
            <div class="col-12">
                    <a href="http://www.twitter.com/supremopete"><img src="/img/icons/twittersmall.png" alt="Twitter"></a>
                    <a href="http://www.youtube.com/supremopete"><img src="/img/icons/ytsmall.png" alt="Youtube"></a>
                    <a href="mailto:supremopete@gmail.com"><img src="/img/icons/mailsmall.png" alt="email"></a>
            </div>

        </div>
        
    </div>