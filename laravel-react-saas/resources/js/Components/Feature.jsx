import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout";
import { Head, Link, usePage } from "@inertiajs/react";

export default function Feature() {
    const { auth } = usePage().props;

    const availabledCredits = auth.user.available_credits;
    return (
        <AuthenticatedLayout
            user={auth.user}
            header={
                <h2 className="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                    {Feature.name}
                </h2>
            }
        >
            <Head title="Feature 1" />
        </AuthenticatedLayout>
    );
}
