<?php

/* where to save gnupg key */
putenv ('GNUPGHOME=/tmp');

$pub = '
-----BEGIN PGP PUBLIC KEY BLOCK-----
Version: GnuPG v2.0.14 (GNU/Linux)

mQENBFFDbIQBCACjs0aDFxcFVz3qMqux4tsq9wdd+Rl4jQFaD0vUCJlb2UDqoNIo
AEBn6elaR7PZ85JaAaebJC2K7Tglit83lV6aB+bKuMadmB7ihogEkED5UwFb+3Y7
YQkz8SSIw5ec2UE3PvBU1fiCZdGJG7UxuP52cBMZB/td+s6yQrNfXccJv0EBycxS
qkAUQQ79x0tB4aZmPk1DhcHWAnNKEr2/2rJ49/H4A5kBBaRRRZ+WmBMdHh/cRT0x
m5SjPj3AVzYsXG8SsTJmfpmclUn1B3s3rHcV+1Z1LH1ERh1iqezPXicsI4dbsKBZ
zDsinpBtchdTXglPirBtO8OJyQWqxGkFSAtBABEBAAG0R1dhaXRtYW4gR29iYmxl
IChTYW4gSm9zZSBDYWxpZm9ybmlhIDUxMCA4MzAgNzk3NSkgPHdhaXRtYW5Ad2Fp
dG1hbi5uZXQ+iQE4BBMBAgAiBQJRQ2yEAhsDBgsJCAcDAgYVCAIJCgsEFgIDAQIe
AQIXgAAKCRAE/9/m9RRqBWvRB/0RAsMsGPaZKodRPfEC8npNEZf6nB/KWkuzu42E
A2cBWhvYPEEi+uTzDDWh7HEdCe91aprEV2HlUIR4UaJtBwCfnKf846ClI9B4I50o
O8nOgvVLfn85jPIOX1a2qux03uKR58B9GjIJ2aCOtFd2mK/zUajiFOOoC9Flr528
lhoaG8QMljCSRgirL2S7Z+nSpJGsMc+C/4OuF0qz+vxuVS5Am/APooKgjepedE9k
gThvdaTtVDZcFehWQPjje11gnK0SCkY+vYCLhAkGH3aqtHNzst/OBNcOo0G83cNG
9sGF6cj9pnvtNf8G2aPZDDSEoHe4xDw2EJEyuX1DtAH8WihVuQENBFFDbIQBCADK
+ZE7BV5nYUGQ+jVLCGsdccG2EGCP7S7B53iEUMwq8uMUBpQ1afRCiyUYEmz3GND/
v5toXgmtrQMjtOyIOvK8Yol5cUk444NpigLQzEgniSduZNLY5kcp2zA4sloZEo7L
9aeaKl1rAbhqtE88CKtz9M4JLZkJHY6IfjoHQ9+fF/7FXLoP1wLDninp3L78y7aQ
pOXBNIvFmn6k5vnEXtNyWSmS0OQPEiKt+8ZYAQ0FQ63z6mKUc+ob5hIvsLe5TbaT
Zi7JJcXNkFz5w+ym0EX8TGNhDk8ljAMoSjob2mq8PO1rKKkR/1xrd9bmcpLTylHs
xvG0q608BoF/4NX6pm93ABEBAAGJAR8EGAECAAkFAlFDbIQCGwwACgkQBP/f5vUU
agUpYggAnbcxHQE7IVqMPvt2XPB2lB7nPjr3mG77aWJcYO6sBOgyKWZzvpK35pVw
VfMInphsBWM7L5Z8vQUtlAbvrBZkntrkpajt/6hv1q/DL5rw3hpVbnCrNRHYVjEL
1zIUarkzhpDX4M9wUi65yjVSdGBQnUaeVhOpv2GNiajF9a3trG/N69l5AT+a21Ww
K00R/r5Od4qEHMu1ScaKzHHjB2fxJULzKbPSUj0QDCbgi1xQ07m8pyJXT0lb8+1f
qUQtXU1RIs9tfuqlXGJqgeM3h72ycB6mgatiuwBI0PlEw7OsKu+keWbV8rt2mPYT
2fTYH5OyGomunYmyPEDptYcy5rl5bA==
=BELZ
-----END PGP PUBLIC KEY BLOCK-----
';

/* init gnupg */
$res = gnupg_init();

/* import pub key to keychain */
$rtv = gnupg_import($res,$pub);

/* dump array to get fingerprint, use the fingerprint to encrypt/sign
   in your other scripts */
var_dump($rtv); 
