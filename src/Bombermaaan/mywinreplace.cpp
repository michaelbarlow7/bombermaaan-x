#include "mywinreplace.h"

static unsigned char *currentResource = NULL;
static unsigned long currentResourceLen = 0;

int myGetObject(int hBitmap, myLPVOID *lpvObject)
{
    // type == BITMAP
    currentResource = myGetResource(0, hBitmap, &currentResourceLen);
    
    if (currentResource == NULL)
        return 0;
    else
    {
        *lpvObject = currentResource;
        return currentResourceLen;
    }
}

myLPVOID myLoadResource(int name, int type){
    currentResource = myGetResource(type, name, &currentResourceLen);
    return currentResource;
}

DWORD mySizeOfResource(){
    return currentResourceLen;
}
