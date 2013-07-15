#include "mywinreplace.h"

static unsigned char *currentResource = NULL;
static unsigned long currentResourceLen = 0;

int myGetObject(int hBitmap, int ignored, myLPVOID *lpvObject)
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
