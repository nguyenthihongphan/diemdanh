<?php
class login
{
		private function connect()
	{
		$con=mysql_connect("localhost","daohuynh","123456");
		if(!$con)
		{
			echo'Không kết nối cơ sở dữ liệu';
			exit();
			}
		else
		{
			mysql_select_db("doan");
			mysql_query("SET NAMES UTF8");
			return $con; 
			}
		}
		public function mylogin($user,$pass)
		{
			$pass=($pass);
			$link=$this->connect();
			$sql="select id, username, password, phanquyen from taikhoan where username='$user' and password='$pass' limit 1";
			$ketqua=mysql_query($sql,$link);
			$i=mysql_num_rows($ketqua);
			if($i==1)
			{
					while($row=mysql_fetch_array($ketqua))
					{
						$id=$row['id'];
						$username=$row['username'];
						$password=$row['password'];
						$phanquyen=$row['phanquyen'];
						session_start();
						$_SESSION['id']=$id;
						$_SESSION['user']=$username;
						$_SESSION['pass']=$password;
						$_SESSION['phanquyen']=$phanquyen;
						return 1;
						}
				}
			else
			{
				return 0;
				}
			}
		public function confirmlogin($id,$user,$pass,$phanquyen)
		{
			$link=$this->connect();
			$sql="select id from taikhoan where id='$id' and password='$pass' and phanquyen='$phanquyen' limit 1";
			$ketqua=mysql_query($sql,$link);
			$i=mysql_num_rows($ketqua);
			if($i!=1)
			{
					header("location:index.php");
							}
			}
		public function luachon($sql)
		{
			$link=$this->connect();
			$ketqua=mysql_query($sql,$link);
			mysql_close($link);
			$i=mysql_num_rows($ketqua);
			$kq='';
			if($i>0)
			{
				while($row=mysql_fetch_array($ketqua))
				{
					$id=$row[0];
					$kq=$id;
					}
				}
				return $kq;
			}
				public function themxoasua($sql)
	{
		$link=$this->connect();
		if(mysql_query($sql,$link))
		{
			return 1;
		}
		else
		{
			return 0;
		}
	}
	}

?>
