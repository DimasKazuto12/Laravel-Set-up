import { Head } from '@inertiajs/react';
import { index as userIndexRoute } from '@/routes/users';


export default function UserIndex() {
    return (
        <>
            <Head title="Manage User" />
            <div className="flex h-full flex-1 flex-col gap-4 overflow-x-auto rounded-xl p-4">
                
            </div>
        </>
    );
}

UserIndex.layout = {
    breadcrumbs: [
        {
            title: 'Manage User',
            href: userIndexRoute(),
        },
    ],
};
