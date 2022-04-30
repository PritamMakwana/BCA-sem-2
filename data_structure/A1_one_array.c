#include<stdio.h>
 
 void main()
 {
 int arr[5],i;
 
printf("\n Enter 5 Values\n");
 for(i=0;i<5;i++)
 {
 printf("\n Enter arr[%d]:= ",i);
 scanf("%d",&arr[i]);
 }
 for(i=0;i<5;i++)
 {
 printf("\n Value of arr[%d]:= ",i);
 printf("%d",arr[i]);
 }
 
 }
