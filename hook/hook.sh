#!/bin/bash
commit_msg=$(cat $1)
commit_length=${#commit_msg}
EXPECTED_MESSAGE=", nous sommes l'équipe 4, composée de Fils, Clement, Dorian et Aedan."
commit_msg="$commit_msg $EXPECTED_MESSAGE"
echo "$commit_msg" > "$1"