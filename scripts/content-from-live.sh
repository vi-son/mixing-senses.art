#!/bin/bash
rsync -chavbrzP --backup-dir=../BACKUPS/content/ --stats uberspace:/var/www/virtual/guido/mixing-senses.art/content/ content
