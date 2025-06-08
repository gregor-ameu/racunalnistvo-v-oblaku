novi git repository
novi VPC, subneti, gateway, security group, routing table
2x EC2 (private za databazo, public za spletno stran)
spletna stran bo imela na prvi polovici input UI za polnjenje databaz, druga polovica pa live update databaze, lista available databaz
lambda - logging database update v file na S3.

Dodatno- avtomizacija (pipeline iz git -> public EC2) če mi uspe pridobiti dobro in hitro rešitev za Whitelistanje IPjev gita
