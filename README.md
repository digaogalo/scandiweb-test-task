
# Scandiweb Junior Developer Test

### Available at:
<hr />

### How to use : 
On  the <i>.htaccess</i> file, replace your deployment directory on <i>RewriteBase
For example: if you're deploying at <i>https://localhost/yourApp/</i>, <i>RewriteBase</i> must be <i>/yourApp/</i>
Else if you're deploying simply at <i>https://localhost/</i>, <i>RewriteBase</i> must be <i>/</i>
On  the <i>/app/models/Database.php</i> file, replace the <i>HOST</i>, <i>USER</i>, <i>PASSWORD</i> and <i>DBNAME</i> constants with your relevant SQL information.
  
<hr />
  
### Database:
  
| NAME | TYPE| ATTRIBUTES |
| :---         |     :---:      |          ---: |
| sku   | varchar(30)     |Primary    |
| name    | varchar(65)       |       |
|price   | decimal(10,0)     |     |
| productType    | enum(Book, Furniture, DVD)       |      |
| productAttribute   | varchar(12)     |     |
  
<hr />
  
&copy; Made By Rodrigo Carvalho
