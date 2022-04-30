#include<stdio.h>
#include<stdlib.h>
#include<string.h>

void main(){
    char *str;
    str=(char*)malloc(15);
    strcpy(str,"computer");
    printf("String=%s,Address=%u",str,&str);
    str=(char*)realloc(str,25);
    printf("\n");
    strcat(str,".com");
    printf("String=%s,Address=%u",str,&str);
    free(str);

}