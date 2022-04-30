#include<stdio.h>
#define SIZE 4

void bubblesort(int a[],int n){
  int i,j,temp;

  for(i=n-1;i>0;i--)
    {
     for(j=0;j<i;j++)
       {
          if(a[j]>a[j+1]){
           temp=a[j];
           a[j]=a[j+1];
           a[j+1]=temp;

         }
       } 
     }
}

void main()
{
   int a[SIZE],i;

   for(i=0;i<SIZE;i++)
   {
       printf("ENter value :-");
       scanf("%d",&a[i]);
   }

   bubblesort(a,SIZE);

   printf("\n after sorting");
    
    for(i=0;i<SIZE;i++)
    {
        printf("\n\t =%d",a[i]);
    }

}