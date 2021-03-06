<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
		<div class="container-float text-center">
			<div class="card shadow mb-4">
				<div class="card-header py-3">
					<h6 class="m-0 font-weight-bold text-primary">List of Accounts</h6>
				</div>
				<div class="card-body">
					<div class="table-responsive">
						<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
						<thead>
								<tr class="text-center">
									<th>Account ID</th>
									<th>Name</th>
									<th>Category</th>
									<th>Sub-Category</th>
									<th>Normal Side</th>
									<th>Balance</th>
									<th>Debit</th>
									<th>Credit</th>
									<th>Order</th>
									<th>Statement</th>
<?php
	if ($userData['userRole'] == 20){
		echo '
									<th></th>
		';
	}
?>
								</tr>
							</thead>
							<tfoot>
								<tr class="text-center">
									<th>Account ID</th>
									<th>Name</th>
									<th>Category</th>
									<th>Sub-Category</th>
									<th>Normal Side</th>
									<th>Balance</th>
									<th>Debit</th>
									<th>Credit</th>
									<th>Order</th>
									<th>Statement</th>
<?php
	if ($userData['userRole'] == 20){
		echo '
									<th></th>
		';
	}
?>
								</tr>
							</tfoot>
							<tbody>
	<?php
	foreach ($accountList as $account){
		$account = (array) $account;
		echo '
								<tr class="text-center">
									<td><a href="'.site_url()."ledgers/index/".$account["accountID"].'">#'.$account["accountID"].'</a></td>
									<td><a href="'.site_url()."ledgers/index/".$account["accountID"].'">'.$account["accountName"].'</a></td>
									<td>'.$account["accountCategory"].'</td>
									<td>'.$account["accountCategorySub"].'</td>
									<td class="text-left">'.$account["accountSide"].'</td>
									<td class="text-right">$'.number_format($account["accountBalance"], 2).'</td>
									<td class="text-right">$'.number_format($account["accountDebit"], 2).'</td>
									<td class="text-right">$'.number_format($account["accountCredit"], 2).'</td>
									<td class="text-center">'.$account["accountOrder"].'</td>
									<td class="text-left">'.$account["accountStatement"].'</td>';
		if ($userData['userRole'] == 20){
			echo '
									<td><a class="btn btn-info" href="'.site_url("accounts/edit/".$account["accountID"]).'">Edit Account</a></td>
			';
		}
		echo '					</tr>
		';
	}
?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
