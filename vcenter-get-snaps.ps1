# Add some comments
$vmcred = Get-Credential
$server = Read-Host -Prompt 'Enter VMware server name'
Connect-VIServer -Server $server -AllLinked -Credential $vmcred
Get-VM | Get-Snapshot | Select-Object VM,Created,SizeGB,Name,Description | Format-Table
