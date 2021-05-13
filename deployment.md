## Deployment

Staging site is on a Google Cloud instance at [http://34.87.208.124/]()

To connect FileZilla to staging instance:

For the first time

- Navigate to File/Site Manager
- Create and name new site

In General Tab

- Protocol: SFTP - SSH File Transfer Protocol
- Host: 34.87.208.124
- Login Type: key file
- User: Get from PuttyGen "Key comment:" when private key is loaded
- Key file: navigate to private key location
- Tap Connect

For every other time - At top of FileZilla

- HOST: sftp://34.87.208.124
- Username: Get from PuttyGen "Key comment:" when private key is loaded
- Tap Quickconnect
