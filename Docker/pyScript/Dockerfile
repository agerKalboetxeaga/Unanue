# Pulling Ubuntu image
FROM ubuntu:20.04

# Updating packages and installing cron
RUN apt-get update && apt-get install cron python3 python3-pip -y 

# Install jupyterlab
Run python3 -m pip install jupyterlab

# Copying script file into the container.
COPY date-script.sh pyScript_proiektu.ipynb textfile.txt .

# Giving executable permission to the script file.
RUN chmod +x date-script.sh

RUN chmod +x pyScript_proiektu.ipynb

# Adding crontab to the appropiate location
ADD crontab /etc/cron.d/my-cron-file

# Giving executable permission to crontab file
RUN chmod 0644 /etc/cron.d/my-cron-file

# Running crontab
RUN crontab /etc/cron.d/my-cron-file

# Creating entry point for cron 
ENTRYPOINT ["cron", "-f"]
