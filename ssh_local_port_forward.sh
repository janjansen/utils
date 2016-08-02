#!/bin/bash
ssh -i ~/.ssh/qa -f ROSomkin@92.242.39.115 -p 65222 -L 54322:127.0.0.1:5432 -N
