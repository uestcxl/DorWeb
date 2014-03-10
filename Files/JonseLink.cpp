#include <stdio.h>
#include <tchar.h>
#include<stdlib.h>

typedef struct Jonse
{
	int code;
	struct Jonse *next;
} Jonse;

Jonse*	Create(int n);
void	ShowList(Jonse *);
Jonse*	JonseOut(Jonse *h, int N, int M);

Jonse * Create(int n)
{
	Jonse *h,*p;
	int i;
	h=(Jonse *)malloc(sizeof(Jonse));
	p=h;
	for(i=1;i<=n;i++)
	{
		p->code=i;
		if(i<n)
		{
			p->next=(Jonse *)malloc(sizeof(Jonse));
			p=p->next;
		}
	}
	p->next=h;
	return h;
}

void ShowList(Jonse *h)
{
	Jonse *p;
	p=h;
	do
	{
		printf("%d\t",p->code);
		p=p->next;
	}	while(p!=h);
}

Jonse* JonseOut(Jonse *h, int N, int M) // �����У���MֵΪ1��ʱ��whileѭ���������룬�㷨����
{
	Jonse *p,*q;
	p=h;
	while(p!=p->next)
	{
		for(int k=1; k<M; k++)
		{ q=p;p=p->next; }
		printf("%d\t",p->code);
		q->next=p->next;
		free(p);
		p=NULL;
		p=q->next;
	}
	printf("\nThe winner is %d\n",p->code);
	return p;
}

int main(int argc, char * argv[])
{
	Jonse *head;
	int val,num;
	printf("\n����������������� :\n");
	scanf("%d",&num);
	head=Create(num);
	ShowList(head);
	printf("\n�����뱨��ֵ :\n");
	scanf("%d",&val);
	printf("������߱������ :\n");
	JonseOut(head,num,val);
	return 0;
}

