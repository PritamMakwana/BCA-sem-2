#include <stdio.h>
#define SIZE 5
void select_sort(int[]);
 void main()
{
int a[SIZE],i;
printf("\n\n");
for(i=0;i<SIZE;i++)
{
printf("Enter valuea[%d]",i);
scanf("%d",&a[i]);
}
select_sort(a);

}
void select_sort(int arr[])
{
int i,j,t=0;
for(i=0;i<SIZE;i++)
{
for(j=i+1;j<SIZE;j++)
{
if(arr[i]>arr[j])
{
t=arr[i];arr[i]=arr[j];
arr[j]=t;
}
}
}
printf("sorted element");
for (i=0;i<SIZE;i++)
{
printf("\n %d",arr[i]);
}

}
