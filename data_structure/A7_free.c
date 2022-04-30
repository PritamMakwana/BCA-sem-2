#include<stdio.h>
#include<malloc.h>
#include<string.h>
void main(){
    char *buffer;
    buffer=(char*)malloc(100);
    strcpy(buffer,"comp");
    printf("\n The buffer size is %d",*buffer);
    printf("\n Buffer contains %s",buffer);
    printf("\n Press any keys to free memory");
    free(buffer);
}