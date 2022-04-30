#include<stdio.h>
#include<stdlib.h>
#include<string.h>

void main(){
    char *str;
    str=(char*)malloc(15);
    strcpy(str,"computer");
    printf("string=%s,Addrerss=%u",str,&str);
    free(str);
}