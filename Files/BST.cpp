#include <stdio.h>
#include <stdlib.h>

#define ENDKEY -1

typedef int KeyType;

typedef struct  node
{
	KeyType  key ; /*�ؼ��ֵ�ֵ*/
	struct node  *lchild,*rchild;/*����ָ��*/
}BSTNode, *BSTree;

void InsertBST(BSTree *bst, KeyType key)
/*���ڶ����������в����ڹؼ��ֵ���key��Ԫ�أ������Ԫ��*/
{ 
	BSTree s;
	if (*bst == NULL)/*�ݹ��������*/
	{
		s=(BSTree)malloc(sizeof(BSTNode));/*�����µĽ��s*/
		s-> key=key;
		s->lchild=NULL; 
		s->rchild=NULL;
		*bst=s;
	}
	else 
		if (key < (*bst)->key)
			InsertBST(&((*bst)->lchild), key);/*��s����������*/
		else 
			if (key > (*bst)->key)
				InsertBST(&((*bst)->rchild), key); /*��s����������*/
}


void  CreateBST(BSTree  *bst)
/*�Ӽ�������Ԫ�ص�ֵ��������Ӧ�Ķ���������*/
{ 
	KeyType key;
	*bst=NULL;
	scanf("%d", &key);
	while (key!=ENDKEY)   /*ENDKEYΪ�Զ��峣��*/
	{
		InsertBST(bst, key);
		scanf("%d", &key);
	}
}

void  PreOrder(BSTree root) 
/*�������������, rootΪָ�������������ָ��*/
{
	if (root!=NULL)
	{
		printf("%d  ",root->key);  /*������*/
		PreOrder(root->lchild);  /*�������������*/
		PreOrder(root->rchild);  /*�������������*/
	}
}

BSTree  SearchBST(BSTree bst, KeyType key)
/*�ڸ�ָ��bst��ָ����������bst�ϣ����ҹؼ��ֵ���key�Ľ�㣬�����ҳɹ�������ָ���Ԫ�ؽ��ָ�룬���򷵻ؿ�ָ��*/
{ 
	BSTree q;
	q=bst;
	while(q)
	{
		if (q->key == key) 
			return q;  /*���ҳɹ�*/
		if (q->key > key)  
			q=q->lchild;  /*���������в���*/
		else  
			q=q->rchild;  /*���������в���*/
	}
	return NULL; /*����ʧ��*/
}/*SearchBST*/

BSTNode  * DelBST(BSTree t, KeyType  k) /*�ڶ���������t��ɾȥ�ؼ���Ϊk�Ľ��*/
{
	BSTNode  *p, *f,*s ,*q;
	p=t; 
	f=NULL;
	while(p)  /*���ҹؼ���Ϊk�Ĵ�ɾ���p*/
	{ 
		if(p->key==k )  break;  /*�ҵ�������ѭ��*/
		f=p;   /*fָ��p����˫�׽��*/
		if(p->key>k)  
			p=p->lchild;
		else 
			p=p->rchild;
	} 
	if(p==NULL)  return t;  /*���Ҳ���������ԭ���Ķ���������*/
	if(p->lchild==NULL)  /*p��������*/
	{ 
		if(f==NULL) 
			t=p->rchild;  /*p��ԭ�����������ĸ�*/
		else 
			if(f->lchild==p)  /*p��f������*/
				f->lchild=p->rchild ;  /*��p������������f��������*/
			else  /*p��f���Һ���*/
				f->rchild=p->rchild ;  /*��p������������f��������*/
			free(p);  /*�ͷű�ɾ���Ľ��p*/
	}
	else  /*p��������*/
	{ 
		q=p; 
		s=p->lchild;
		while(s->rchild)  /*��p���������в��������½��*/
		{
			q=s; 
			s=s->rchild;
		}
		if(q==p) 
			q->lchild=s->lchild ;  /*��s������������q��*/
		else 
			q->rchild=s->lchild;
		p->key=s->key;  /*��s��ֵ����p*/
		free(s);
	}
	return t;
}  /*DelBST*/


void  DotOrder(BSTree root, FILE *fp) /*�������������, rootΪָ�������������ָ��*/
{
	if(root==NULL || !(root->lchild || root->rchild))
		return;
	if(root->lchild)
		fprintf(fp,"%d -> %d;\n",root->key,root->lchild->key);
	else
	{
		fprintf(fp,"NULL%dL[label=\"NULL\",shape=none];\n",root->key);
		fprintf(fp,"%d -> NULL%dL;\n",root->key,root->key);
	}
	if(root->rchild)
		fprintf(fp,"%d -> %d;\n",root->key,root->rchild->key);
	else
	{
		fprintf(fp,"NULL%dR[label=\"NULL\",shape=none];\n",root->key);
		fprintf(fp,"%d -> NULL%dR;\n",root->key,root->key);
	}
	DotOrder(root->lchild,fp);
	DotOrder(root->rchild,fp);
}

void MakeDot(BSTree root)
{
	FILE *fp=fopen("BST.gv","w+");
	fprintf(fp,"digraph AVL {\n");
	DotOrder(root,fp);
	fprintf(fp,"}\n\n");
	fclose(fp);
}

int main()
{
	BSTree T;
	int k;
	BSTree result;
	printf("��������������������������, ��-1����:\n");
    CreateBST(&T);
	printf("��������������Ϊ:");
	PreOrder(T);
/*
	printf("\n������Ҫ���ҵ�Ԫ��:");
	fflush(stdin);
	scanf("%d",&k);
	result = SearchBST(T,k);
	if (result != NULL)
		printf("Ҫ���ҵ�Ԫ��Ϊ%d\n",result->key);
	else
		printf("δ�ҵ�!\n");
	result = DelBST(T,k);
	printf("ɾ��Ԫ��%d����������������Ϊ\n",k);
*/
	PreOrder(T);
	MakeDot(T);
	return 0;
}
