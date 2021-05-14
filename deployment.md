## Deployment

Staging site is on a Google Cloud instance at [http://34.87.208.124/]()

To gain access with FileZilla, we will need to add a public key to the
Google Cloud instance and the corresponding private key to FileZilla.

To generate a key with puttygen:

- Download and install puttygen
- Open puttygen and click on the Generate button. Move cursor as instructed.
- The public key is displayed in the top box and the Key Comment is the Username for FileZilla.
- Click on Save private key button, save without passphrase and navigate to the intended save location

To load a key into puttygen:

- Open puttygen and click the Load button
- Navigate to private key location and select the private key
- All necessary data is displayed in the puttygen screen

To add a new public key to Google Cloud instance:

- Copy public key at top of puttygen. Make sure you have it all.
- Open your Google Cloud instance
- Click on the Hamburger at top left then Compute Engine then Metadata
- On the Metadata page, click the SSH keys tab, click the Edit button
- Click +Add Item button and paste public key into the empty block
- Click Save button to add new public key access to instance

To connect FileZilla to staging instance:
For the first time

- Open FileZilla
- Navigate to File/Site Manager
- Create and name new site

In the General tab

- Protocol: SFTP - SSH File Transfer Protocol
- Host: 34.87.208.124
- Login Type: key file
- User: Get from PuttyGen "Key comment:" when private key is loaded
- Key file: Navigate to private key location
- Tap Connect

For every other time - At top of FileZilla

- HOST: sftp://34.87.208.124
- Username: Get from PuttyGen "Key comment:" when private key is loaded
- Tap Quickconnect
