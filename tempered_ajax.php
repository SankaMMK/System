<?php
  require_once('includes/load.php');
  if (!$session->isUserLoggedIn(true)) { redirect('index.php', false);}
?>

 <?php
 // find all product
  if(isset($_POST['p_name']) && strlen($_POST['p_name']))
  {
    $product_title = remove_junk($db->escape($_POST['p_name']));
    if($results = find_all_product_info_by_title($product_title)){
        foreach ($results as $result) {

          if(!$result['quantity'] <= 0){

            $html .= "<tr>";

            $html .= "<td id=\"s_name\">".$result['name']."</td>";
            $html .= "<td id=\"s_name\">".$result['location']."</td>";
            $html .= "<input type=\"hidden\" name=\"s_id\" value=\"{$result['id']}\">";
            $html  .= "<td>";
            $html  .= "<input type=\"text\" class=\"form-control\" name=\"price\" value=\"{$result['sale_price']}\">";
            $html  .= "</td>";
            $html .= "<td id=\"s_qty\">";
            $html .= "<input type=\"text\" class=\"form-control\" name=\"quantity\" value=\"1\">";
            $html  .= "</td>";
            $html  .= "<td>";
            $html  .= "<input type=\"text\" class=\"form-control\" name=\"total\" value=\"{$result['sale_price']}\">";
            $html  .= "</td>";
            $html  .= "<td>";
            $html  .= "<input type=\"date\" class=\"form-control datePicker\" name=\"date\" data-date data-date-format=\"yyyy-mm-dd\">";
            $html  .= "</td>";
            $html  .= "<td>";
            $html  .= "<button type=\"submit\" name=\"add_sale\" class=\"btn btn-primary\">Add sale</button>";
            $html  .= "</td>";
            $html  .= "</tr>";
          
          }else{
            $html ='<tr><td>Out of Stock</td></tr>';
          }

        }
    } else {
        $html ='<tr><td>product name not resgister in database</td></tr>';
    }

    echo json_encode($html);
  }
 ?>
