Step-1  How to install git 

   Install git 
Yum install git -y
Step-1.1  Create ssh key (ED25519  / RSA)

	ssh-keygen   -t   ed25519   -C   “Your Email”

Step-1.2  How to check your Public key in Linux OS and then share this public key with your instructor via email / whatsapp / sms / or any other medium
	
cat /root/.ssh/id_ed25519.pub

Step-1.2  When your instructor added your key then test ssh as following:
			
		ssh    -T   git@github.com

Step-2   git init 
Step-3    git config --global user.name "YOUR-GIT-NAME"

Step-4  
git config  --global  user.email “YOUR-EMAIL-ID”

Step-5    Initialize the Git commands in your PC
 git init 

Step-6   go  to   /opt/     and create directory github.com

cd   /opt/
   			mkdir  github.com
cd   github.com
Step-7    git clone  git@github.com:cdtsbikaner/ecbmca6.git

Step-8     show all files at current working directory 

			ls  -l
Step 8.1    Now enter the Clone directory recently fetched from remote

cd   ecbmca6

Step-9    Show currently existing  branches 
	
 			git branch

Step-10  Create a new branch 

        git branch  BRANCH-NAME 


Step-10.1 create new branch & checkout into new branch
git  branch  dev

git  checkout  dev

Step-10.2  create a new branch by cloning current  & switch to new branch 

     		  git   checkout  -b  feature1

Step-11      Check status of current branche

  git   status

Step-12    Add those untracked files which are available in the current folder (Locally)
 
git  add  -A
OR 
git  add .

Step-13   You can not upload into Github remote directory until and unless you dont commit your work:

git  commit  -m  “Any message you can write”

Step-14  Cross check your branch 

 git status 

Step-15  Now push newly created local branch from LOCAL - ---->  to   Remote Server 

 git push  origin  dev

Step-16 Cross check at github on Browser 
Whether data is available there or  not ?

Step-17  If you want to see all branches available on remote then;
17.1 :    switch to branch master

		git checkout master

17.2 :    make a pull / fetch request

		git fetch 

Step-17  How to delete branch at local and Remote side

// delete branch locally
git branch -d maninder

// delete branch remotely
git push origin --delete maninder
